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
  }

  public function index()
  {
    $this->viewBuilder()->autoLayout(true);
    $this->render('/Hello/index');
  }

  public function other()
  {
    $this->viewBuilder()->autoLayout(false);
    $this->autoRender = true;
  }
}