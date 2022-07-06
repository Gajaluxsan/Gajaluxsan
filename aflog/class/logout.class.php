<?php
session_start();
include ('autocaller.class.php');
class logout{

public function logout(){
    if (isset($_SESSION['cid']) && isset($_SESSION['name'])){
        session_unset();

        session_destroy();
        $te =new test();
        $te->logout($_SESSION['log_id']);
        // header("Location: /puupys/ulogin.ua.php");
    }
    else{
        header("Location: /puupys/ulogin.ua.php");
    }
}
}


 print_r($_SESSION);
 $n =new logout();
 $n->logout();