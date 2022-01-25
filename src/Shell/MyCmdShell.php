<?php
namespace App\Shell;

use Cake\Console\ConsoleOptionParser;
use Cake\Console\Shell;
use Cake\Log\Log;

class MyCmdShell extends Shell {
  public function main($n){
    $res = 0;
    for($i = 1; $i <= $n; $i++) {
      $res += $i;
    }
    $this->out("1から{$n}までの合計:" . $res);
  }
}