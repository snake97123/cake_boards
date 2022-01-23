<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;

class SuperTableBehavior extends Behavior {
  public function initialize(array $config){

  }

  public function anyData(){
    $count = $this->_table->find()->count();
    $n = mt_rand(0, $count - 1);
    $data = $this->_table->find()->offset($n)->first();
    return $data; 
  }
}