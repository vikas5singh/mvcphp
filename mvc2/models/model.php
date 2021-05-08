<?php
//include_once('models/model.php');
class Model{
    public function getlogin(){
        if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
            if($_REQUEST['username'] == 'vikas' && $_REQUEST['password'] == 'kumar'){
                
                echo 'vikas kumar';
                return 'login';
            }else{
                return 'invalid user';
            }
        }
    }
}
?>