<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Network\Exception\InvalidCsrfTokenException;
use Cake\ORM\TableRegistry;

class HelloController extends AppController
{
  public function initialize()
  {
    parent::initialize();
    $this->boards = TableRegistry::get('Boards');
    $this->name = 'Hello';
    // $this->autoRender = false;
    // $this->viewBuilder()->autoLayout(true);
    // $this->viewBuilder()->Layout('Hello');
    $this->set('footer', 'Hello/footer1');
    $this->loadComponent('Csrf');
    $this->loadComponent('Cookie');
    $this->Cookie->config('path', '/');
    $this->Cookie->config('domain', 'localhost');
    $this->Cookie->config('expires', 0);
    $this->Cookie->config('secure', false);
    $this->Cookie->config('httpOnly', true);
    $this->Cookie->config('encryption', false);
  }

  public function index()
  {
    $data = $this->boards->anyData();
    // $data = $this->Cookie->read('mykey');
    $this->set('data', $data);
    // if ($this->request->isPost()){
    //   if (!empty($this->request->data['name']) && !empty($this->request->data['password'])){
    //     $this->Flash->success('ok!');
    //   } else {
    //     $this->Flash->error('bad...');
    //   }
    // } else {
    //   $this->Flash->info('please input form:');
    // }
    // // $this->Flash->set('クリックすると消えます。');
    // $this->set('msg', 'おはようございます');
    // $n = rand(1,2);
    // $this->set('footer','Hello/footer' . $n);
    // $this->viewBuilder()->autoLayout(true);
    // $this->render('/Hello/index');
    // $result = "";
    // if($this->request->isPost()){
      // $result = "<pre>送信された情報<br/>";
    //  $result = $this->request->data['HelloForm']['date'];
        // $v_str = '';
        // foreach($val as $v)
        //   $v_str .= $v . ' ';
        
    // } else {
    //   $result = "なにか送信してください";
    // }
    // $this->set("result", $result);
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

  public function beforeFilter(Event $event){
    $this->eventManager()->off($this->Csrf);
  }

  public function write(){
    $val = $this->request->query['val'];
    $this->Cookie->write('mykey', $val);
    $this->redirect(['action' => 'index']);
  }
}