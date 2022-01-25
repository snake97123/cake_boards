<?php
namespace App\Shell;

use Cake\Console\ConsoleOptionParser;
use Cake\Console\Shell;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;

class MyCmdShell extends Shell {
  public function initialize(){
    parent::initialize();
    $this->loadModel('Boards');
  }

  public function main($num){
    $data = $this->Boards->get($num);
    $this->out(print_r($data->toArray()));
  }
  // public function main(...$num){
  //   $res = 0;
  //   foreach($num as $n){
  //     $res += $n;
  //   }
  //   $this->out("合計: " . $res);
  // }
}