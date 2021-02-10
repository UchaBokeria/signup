<?php
  class Contrl extends Model{
    public function signUp($params){
      $sql = "INSERT INTO users(name,surname,birthDate,gender,address,
                          mobile,mobile2,country_id,city,email,password,confirmed)
                          VALUES(?,?,?,?,?,?,?,?,?,?,?,?);";
      $this->setAll($sql,$params);
    }

  }
