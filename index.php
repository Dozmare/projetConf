<?php
require ('Controller/Frontend.php');

$frontend = new Controller_Frontend();

//echo 'hello';
try{
    if(isset($_GET['action'])){
        if(isset($_GET['action']) == "index"){
            $frontend->index();
        }
    }
    else{
        $frontend->index();
    }
}catch (Exception $e){
    echo 'Erreur : '. $e->getMessage();
}