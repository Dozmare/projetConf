<?php

class Controller_Frontend {

    public function index(){
        require('View/accueil.php');
    }

    public function inscription(){
        require('View/Inscription.php');
    }

}