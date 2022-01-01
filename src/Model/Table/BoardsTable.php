<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\Entity;
use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;

class BoardsTable extends Table {
  public function beforeFind(Event $event, Query $query){
    $query->order(['name' => 'ASC']);
  }
  public function beforeSave(Event $event, EntityInterface $entity){
    $n = $this->find('all', ['conditions'=>['name'=>$entity->name]])->count();
    if ($n == 0){
      return true;
    } else {
      return false;
    }
  }
}