<?php
require ('Controller/Frontend.php');

$frontend = new Controller_Frontend ();

try{
    if(isset($_GET['p'])){
        if(isset($_GET['p']) == "index"){
            $frontend->index();
        }
        if(isset($_GET['p']) == "inscription"){
            $frontend->inscription();
        }
    }
    else{
        $frontend->index();
    }
}catch (Exception $e){
    echo 'Erreur : '. $e->getMessage();
}