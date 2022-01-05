<?php
namespace App\Controller;

use \Exception;
use Cake\Log\Log;
use Cake\Datasource\ConnectionManager;
use Cake\Validation\Validator;

class BoardsController extends AppController {
  public function index($id = null){
    $data = $this->Boards->find('all')->contain(['People']);
    $this->set('data', $data);
    $this->set('entity', $this->Boards->newEntity());
    // $this->set('entity', $this->Boards->newEntity());
    // if($id != null){
    //   try{
    //     $entity = $this->Boards->get($id);
    //     $this->set('entity', $entity);
    //   } catch (Exception $e){
    //     Logg::write('debug', $e->getMessage());
    //   }
    // $data = $this->Boards->find('list')->toArray();
  //  $data = $this->Boards->find();
  //  if (!$this->request->is('post')){
  //    $connection = ConnectionManager::get('default');
  //    $data = $connection
  //       ->execute('SELECT * FROM boards')
  //       ->fetchAll('assoc');
  //  } else {
  //    $input = $this->request->data['input'];
  //    $connection = ConnectionManager::get('default');
  //    $data = $connection
  //       ->execute('SELECT * FROM boards where id = :id',
  //       ['id' => $input])
  //       ->fetchAll('assoc');
  //  }
  //  $this->set('data', $data);
  //  $this->set('entity', $this->Boards->newEntity());
    // $this->set('data', $data->toArray());
    // $this->set('count', $data->count());
    // }
    // $data = $this->Boards->find('all')->order(['id' => 'DESC']);
    // $this->set('data', $data->toArray());
    // $this->set('count', $data->count());
    // $data = $this->Boards->find('all');
    // $this->set('data',$data->toArray());
    // $this->set('count', $data->count());
    // $this->set('min', $data->min('id'));
    // $this->set('max', $data->max('id'));
    // $this->set('first', $data->first()->toArray());

    // $this->set('entity', $this->Boards->newEntity());
    // if ($this->request->is('post')){
    //   $data = $this->Boards->find('all',[
    //      'conditions' => [
    //        'name like' => "%{$this->request->data['name']}%"
    //      ]
    //      ]);
    // } else {
    //   $data = $this->Boards->find('all');
    // }
    // $data->order(['title'=>'DESC']);
    // $this->set('data', $data->toArray());
    // $this->set('count', $data->count());
  }

  public function addRecord(){
    if($this->request->is('post')){
      $board = $this->Boards->newEntity($this->request->data);
      $validator = new Validator();
      $validator->email('name');
      $errors = $validator->errors($this->request->data);
      // if (!empty($errors)){
      //   $this->Flash->error('EMAIL ERROR!!');
      // } else {
        if ($this->Boards->save($board)){
          $this->redirect(['action' => 'index']);
        }
      // }
    }
    $this->set('entity', $board);
  }

  public function research(){
    $this->set('entity',$this->Boards->newEntity());
    if ($this->request->is('post')) {
      $id = $this->request->data['id'];
      $data = $this->Boards->findById($id);
      // $data = $this->Boards->findById($this->request->data['id']);
      // $data = $this->Boards->find('all', [
      //   'conditions' => ['name like' =>"%{$this->request->data['name']}%"]
      // ]);
      
     
      
    } else {
      $data = $this->Boards->find('all');
    }
      
      
      // $data = $this->Boards->find('all');
   $this->set('data', $data->toArray());
   $this->set('count', $data->count());
    // $this->set('count', $data->count());
    // $this->set('min', $data->min('id'));
    // $this->set('max', $data->max('id'));
    // $this->set('first', $data->first()->toArray());
    // return $this->redirect(['action' => 'index']);
  }

  public function delRecord(){
     if ($this->request->is('post')) {
      //  try {
         $this->Boards->deleteAll(
           ['id'=>$this->request->data['id']]
         );
        //  $entity = $this->Boards->get($this->request->data['id']);
        //  $this->Boards->delete($entity);
      //  } catch(Exception $e){
      //    Log::write('debug', $e->getMessage());
      //  }
     }  
     $this->redirect(['action' => 'index']);
  }

  public function editRecord(){
    if ($this->request->is('put')){
      try {
        $entity = $this->Boards->get($this->request->data['id']);
        // $this->Boards->patchEntity($entity, $this->request->data);
        $entity->content = $this->request->data['content'];
        $this->Boards->save($entity);
      } catch(Exception $e){
        Logg::write('debug', $e->getMassage());
      }
    }
    return $this->redirect(['action' => 'index']);
  }
}