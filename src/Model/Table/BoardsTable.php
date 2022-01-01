<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Event\Event;
use Cake\ORM\Query;

class BoardsTable extends Table {
  public $qdata = null;
  public function beforeFind(Event $event, Query $query){
    $qdata = sql($query);
  }
}