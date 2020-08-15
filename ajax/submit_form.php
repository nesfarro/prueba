<?php
    require_once("../model/model.php");
    $services = new Service();
    echo $services->setContact($_GET['name'],$_GET['email'],$_GET['state'],$_GET['city']);
  
?>