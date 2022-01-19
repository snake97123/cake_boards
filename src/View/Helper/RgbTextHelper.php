<?php 
namespace App\View\Helper;

use Cake\View\Helper;

class RgbTextHelper extends Helper {
  public function initialize(array $config) {
    parent::initialize($config);
  }

  public function redString($str){
    return "<span style=\"background-color:#FF0000;
    color:#FFFFFF\">
    {$str}</span>";
  }

  public function greenString($str){
    return "<span style=\"background-color:#00FF00;
    color:#FFFFFF\">
    {$str}</span>";
  }


  public function blueString($str){
    return "<span style=\"background-color:#0000FF;
    color:#FFFFFF\">
    {$str}</span>";
  }
}