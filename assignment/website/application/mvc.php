<?php
//include
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';
$pageURI=$_SERVER['REQUEST_URI'];
$pageURI=SUBSTR($pageURI, strrpos($pageURI, 'index.html') +10);
//Initialise by creating a new controller instance (or object)
    if(!$pageURI)
        new Controller('home');
    else
        new Controller($pageURI);

?>