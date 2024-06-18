<?php
    require_once 'controller/PlayerController.php';
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
    $controller = new PlayerController($con);
    switch($action){
        case 'index' : 
            require 'view/home.php';
            break;
        case 'create' :
            $controller->create();
            break;
        case 'update' : 
            $controller->update();
            break;
        case 'delete' :
            $controller->delete();
            break;
        default :
            echo "Error";
    }