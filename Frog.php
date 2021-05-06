<?php
class Frog
{
   public $name;
   public $legs;
   public $cold_blooded;
   public $jump;

   public function __construct($name, $legs, $cold_blooded, $jump)
   {
      echo "Name : $this->name = $name <br>";
      echo "legs : $this->legs = $legs <br>";
      echo "cold blooded : $this->cold_blooded = $cold_blooded <br>";
      echo "Jump : $this->jump = $jump <br>";
   }
}
