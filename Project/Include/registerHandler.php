<?php
  include_once "autoClassLoader.php";

  $controller = new Contrl();
  $result = "";

  if(!isset($_POST["firstname"]) || !isset($_POST["lastname"]) ||
     !isset($_POST["birthdate"]) || !isset($_POST["gender"]) ||
     !isset($_POST["address"]) || !isset($_POST["mobile"]) || !isset($_POST["mobile2"]) ||
     !isset($_POST["country"]) || !isset($_POST["city"]) ||
     !isset($_POST["email"]) || !isset($_POST["password"])){ echo "12";}

  else{
      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $birthdate = $_POST["birthdate"];
      $gender = $_POST["gender"];
      $address = $_POST["address"];
      $mobile = $_POST["mobile"];
      $mobile2 = $_POST["mobile2"];
      $country = $_POST["country"];
      $city = $_POST["city"];
      $email = $_POST["email"];
      $pwd = $_POST["password"];
      $password = password_hash($pwd,PASSWORD_DEFAULT);

      $params = array($firstname,$lastname,$birthdate,$gender,
                      $address,$mobile,$mobile2,$country,$city,$email,$password,0);
      $controller->signUp($params);

  }

  echo json_encode($result);
