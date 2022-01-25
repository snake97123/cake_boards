<?php
namespace App\Shell;

use Cake\Console\ConsoleOptionParser;
use Cake\Console\Shell;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;

class MyCmdShell extends Shell {
  public function initialize(){
    parent::initialize();
    // $this->loadModel('Boards');
  }

  public function main(){
    $this->out('※以下のテーブルが利用できます。');
    $this->out('[B]oards');
    $this->out('[P]eople');
    $t = $this->in('テーブルを選択:', ['B', 'P'], 'B');
    $t = strtoupper($t);
    $table = null;
    $id = $this->in('ID番号を入力:', null, 1);
    $data = null;
    switch($t){
      case 'B':
        $table = 'Boards';
        $this->loadModel('Boards');
        $data = $this->Boards->get($id);
        break;
      case 'P':
        $table = 'People';
        $this->loadModel('People');
        $data = $this->People->get($id);
        break;
      default:
        $this->info("can't access Database...");
        exit();
    }
    // $data = $this->Boards->get($num);
    $this->out();
    $this->out("※{$table} id={$id} のレコード:");
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