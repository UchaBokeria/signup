<?php
  class View extends Model{
    public function countries(){
      $sql = "SELECT * FROM countries;";
      $result = $this->getAll($sql);
      return $result;
    }
    public function country($id){
      $sql = "SELECT * FROM countries WHERE id = ?";
      $result = $this->get($sql,$id);
      return $result;
    }

    public function cities(){
      $sql = "SELECT * FROM cities;";
      $result = $this->getAll($sql);
      return $result;
    }
    public function city($country_id){
      $sql = "SELECT cities.id,cities.name,cities.state_id
              FROM cities JOIN states ON cities.state_id = states.id
              WHERE states.country_id = ?";

      $result = $this->get($sql,$country_id);
      return $result;
    }


  }
