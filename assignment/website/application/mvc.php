<?php
require '/its/home/ed385/public_html/3dapp/assignment/website/application/view/load.php'; //requires the load file to view pages
require '/its/home/ed385/public_html/3dapp/assignment/website/application/model/model.php'; //requires the model file to
require '/its/home/ed385/public_html/3dapp/assignment/website/application/controller/controller.php';
new Controller($_GET['id']);
?>