<?php
class Ape
{
   public $name;
   public $legs;
   public $cold_blooded;
   public $yell;

   public function __construct($name, $legs, $cold_blooded, $yell)
   {
      echo "Name : $this->name = $name <br>";
      echo "legs : $this->legs = $legs <br>";
      echo "cold blooded : $this->cold_blooded = $cold_blooded <br>";
      echo "Yell : $this->yell = $yell <br>";
   }
}
