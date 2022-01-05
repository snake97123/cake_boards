<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Entity;
use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;
use Cake\Validation\Validator;

class BoardsTable extends Table {
  public function initialize(array $config){
    $this->belongsTo('People');
  }
  public function validationDefault(Validator $validator){
    $validator->integer('id');
    $validator->notEmpty('name','必須項目です。');
              // ->minLength('name', 3, '3文字以上入力してください')
              // ->maxLength('name', 20, '20文字以下で入力してください');
    $validator->notEmpty('title', '必須項目です。');
    $validator->notEmpty('content', '必須項目です。');
  //   $validator->add('content', 'custom',
  // [
  //   'rule' => ['custom', "/\A\d+\z/"],
  //   'message' => '整数を入力してください.'
  // ]);
    $validator->add('name', 'maxRecords',
    [
      'rule' => ['maxRecords', 'name', 1],
      'message' => __('最大数を超えています。'),
      'provider' => 'table',
    ]);
    return $validator;
  }

  public function maxRecords($data,$field,$num){
    $n = $this->find()
           ->where([$field=>$data])
           ->count();
           return $n < $num ? true : false;
  }
  // public function beforeFind(Event $event, Query $query){
  //   $query->order(['name' => 'ASC']);
  // }
  // public function beforeSave(Event $event, EntityInterface $entity){
  //   $n = $this->find('all', ['conditions'=>['name'=>$entity->name]])->count();
  //   if ($n == 0){
  //     return true;
  //   } else {
  //     return false;
  //   }
  // }
  public function buildRules(RulesChecker $rules){
    $rules->add($rules->isUnique(['name'], 'すでに登録済みです。'));
    return $rules;
  }
}