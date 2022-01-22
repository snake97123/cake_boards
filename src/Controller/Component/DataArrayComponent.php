<?php 
namespace App\Controller\Component;

use Cake\ORM\TableRegistry;
use Cake\Controller\Component;

class DataArrayComponent extends Component {
  public $name = "DataArray";
  public $controller;

  public function initialize(array $config){
    parent::initialize($config);
    $this->controller = $this->_registry->getController();
  }

  public function getMergedArray($tablename){
    $table = TableRegistry::get($tablename);
    $data = $table->find('all');

    $arr = [];
    foreach ($data as $obj){
      array_push($arr, $obj->toArray());
    }
    $this->controller->set('marged', $arr);
  }
}