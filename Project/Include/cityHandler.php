<?php
  include_once "autoClassLoader.php";

  $display = new View();
  $result = "";

  // GET["id"] = country_id
  if(!isset($_GET["id"]))
    $result = $display->cities();

  else
    $result = $display->city($_GET["id"]);

  echo json_encode($result);
