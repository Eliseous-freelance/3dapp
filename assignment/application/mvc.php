<?php
require '/its/home/ed385/public_html/3dapp/assignment/application/view/load.php'; //requires the load file to view pages
require '/its/home/ed385/public_html/3dapp/assignment/application/model/model.php'; //requires the model file to
require '/its/home/ed385/public_html/3dapp/assignment/application/controller/controller.php'; //requires the controller file to
new Controller($_GET['id']);
?>