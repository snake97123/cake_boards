<?php
namespace App\Mode\Entity;

use Cake\ORM\Entity;

class Board extends Entity {
  protected $_accessible = [
    '*' => true,
    'id' => false
  ];
}

