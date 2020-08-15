<?php
    require_once("../model/model.php");
    $services = new Service();
    $services->loadCities($_GET['id']);
  
?>