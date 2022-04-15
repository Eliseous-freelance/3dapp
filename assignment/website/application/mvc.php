<?php
require 'view/load.php'; //requires the load file to view pages
require 'model/model.php'; //requires the model file to 
require 'controller/controller.php'; 
$pageURI=$_SERVER['REQUEST_URI'];
$pageURI=SUBSTR($pageURI, strrpos($pageURI, 'index.html') +10);
//Initialise by creating a new controller instance (or object)
    if(!$pageURI)
        new Controller('home');
    else
        new Controller($pageURI);
?>