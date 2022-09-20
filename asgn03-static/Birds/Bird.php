<?php

class Bird {
    public $habitat;
    public $food;
    public $nesting = "tree";
    public $conservation;
    public $song = "chirp";
    public static $flying = "yes";
    public static $instance_count;
    public static $egg_num = 0;

    
    public static function can_fly() {
      $flying_string = static::$flying == "yes" ? "can fly" : " is stuck on the ground";
      return $flying_string;
    }
    
    public static function create() {
      $class_name = get_called_class(); 
      $newBird = new $class_name;           
     self::$instance_count++;
     return $newBird;
    }

}


class YellowBelliedFlyCatcher extends Bird {
  public $name = "yellow-bellied flycatcher";
  public $diet = "mostly insects.";
  public $song = "flat chilk";
  public static $egg_num = "3-4, sometimes 5.";
}

class Kiwi extends Bird {
  public $name = "kiwi";
  public $diet = "omnivorous";
  public static $flying = "no";
}
