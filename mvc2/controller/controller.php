<?php
include_once('models/model.php');
class Controller{
    public $model;
    public function __construct(){
        $this->model = new Model();
    }
    public function invoke(){
      $result = $this->model->getlogin();
      if($result == 'login'){
          include 'view/afterlogin.php';
      }  else{
          include 'view/login.php';
      }
    }
}
?>