<?php
  include_once "autoClassLoader.php";

  $display = new View();
  $result = "";

  if(!isset($_GET["id"]))
    $result = $display->countries();

  else
    $result = $display->country($_GET["id"]);

  echo json_encode($result);
