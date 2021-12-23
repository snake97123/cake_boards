<?php

namespace App\Controller;

class HelloController extends AppController
{
  public function initialize()
  {
    $this->name = 'Hello';
    // $this->autoRender = false;
    $this->viewBuilder()->autoLayout(true);
    $this->viewBuilder()->Layout('Hello');
    $this->set('footer', 'Hello/footer1');
  }

  public function index()
  {
    // $this->set('msg', 'おはようございます');
    $n = rand(1,2);
    $this->set('footer','Hello/footer' . $n);
    // $this->viewBuilder()->autoLayout(true);
    // $this->render('/Hello/index');
  }

  public function other()
  {
    $this->viewBuilder()->autoLayout(false);
    $this->autoRender = true;
  }

  public function sendForm()
  {
    $str = $this->request['url'];
    $result = "";
    if($str != ""){
      $result = "you type: " . $str;
    } else {
      $result = "empty.";
    }
    $this->set("result", $result);
  }
}