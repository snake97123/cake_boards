<?php
namespace App\Controller;

class PeopleController extends AppController {
  public function index($id = null){
    $this->People->hasMany('boards');
    $data = $this->People 
       ->find('all')
       ->contain(['Boards']);
       $this->set('data', $data);
  }
}