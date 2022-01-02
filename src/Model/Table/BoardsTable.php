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
  public function validationDefault(Validator $validator){
    $validator->integer('id');
    $validator->notEmpty('name')
              ->minLength('name', 3, '3文字以上入力してください')
              ->maxLength('name', 20, '20文字以下で入力してください');
    $validator->notEmpty('title');
    $validator->notEmpty('content');
    return $validator;
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
}