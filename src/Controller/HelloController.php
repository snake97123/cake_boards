<?php

namespace App\Controller;

class HelloController extends AppController
{
  public $name = 'Hello';
  public $autoRender = true;
  public function index(){
    $this->viewBuilder()->enableAutoLayout(false);
  }

  public function other(){
    echo "これはindex以外のページになります。";
  }
}