<?php
namespace App\Shell;

use Cake\Console\ConsoleOptionParser;
use Cake\Console\Shell;
use Cake\Log\Log;

class MyCmdShell extends Shell {
  public function main(){
    $this->out("this is MyCmd Shell.");
  }
}