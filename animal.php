<?php
class Animal
{
   public $name;
   public $legs;
   public $cold_blooded;

   public function __construct($name, $legs, $cold_blooded)
   {
      echo "Name : $this->name = $name <br>";
      echo "legs : $this->legs = $legs <br>";
      echo "cold blooded : $this->cold_blooded = $cold_blooded <br>";
   }
}
