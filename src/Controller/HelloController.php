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
    // $n = rand(1,2);
    // $this->set('footer','Hello/footer' . $n);
    // $this->viewBuilder()->autoLayout(true);
    // $this->render('/Hello/index');
    $result = "";
    if($this->request->isPost()){
      $result = "<pre>送信された情報<br/>";
      foreach($this->request->data['HelloForm'] as $key => $val){
        $result .= $key . '=>' . $val;
      }
      $result .="</pre>";
    } else {
      $result = "なにか送信してください";
    }
    $this->set("result", $result);
  }

  public function other()
  {
    $this->viewBuilder()->autoLayout(false);
    $this->autoRender = true;
  }

  public function sendForm()
  {
    // $result = "送信された情報<br/>";
    // foreach($this->request->query as $key => $val){
    //   $result .= $key . "=>" . $val . "<br />";
    // }
    // $this->set("result", $result);
    $str = $this->getRequest()->getData('text1');
    $result = "";
    if($str != ""){
      $result = "you type: " . $str;
    } else {
      $result = "empty.";
    }
    $this->set("result", h($result));
  }
}