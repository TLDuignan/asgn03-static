<?php

class Bicycle {
  public static $instance_count = 0;
  public $brand;
  public $model;
  public $year;
  public $category;
  public $description;
  private $weight_kg = 0.0;
  protected static $wheels = 2;
  public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];
  
  public function name() {
    return "This is a " . $this->weight_kg . " " . $this->description . " " . $this->year . " " . $this->brand . " " . $this->model . ".";
  }
  
  public function weight_lbs () {
    return floatval($this->weight_kg) * 2.2046226218 . " lbs";
  }
  
  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

  public static function wheel_details() {
    $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
    return "It has " . $wheel_string . ".";
  }

  public function weight_kg() {
    return $this->weight_kg . ' kg';
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }


  public static function create() {
    $class_name = get_called_class(); 
    $obj = new $class_name;           
    self::$instance_count++;
    return $obj;
  }
}

class Unicycle extends Bicycle {
  protected static $wheels = 1;
}

$bike = new Bicycle;
$bike->brand = 'Toyota';
$bike->model = 'Corolla';
$bike->year = '2014';
$bike->description = 'Red';
//$bike->weight_kg = "10";

$uni = new Unicycle;
$uni->brand = 'Toyota';
$uni->model = 'Prius';
$uni->year = '2009';
$uni->description = 'Silver';

echo "Bicycle: " . Bicycle::$instance_count . "<br />";
echo "Unicycle: " . Unicycle::$instance_count . "<br />";

$bike = Bicycle::create();
$uni = Unicycle::create();

echo "Bicycle count: " . Bicycle::$instance_count . "<br />";
echo "Unicycle count: " . Unicycle::$instance_count . "<br />";

echo "<hr />";

echo 'Categories: ' . implode(', ', Bicycle::CATEGORIES) . '<br />';
$bike->category = Bicycle::CATEGORIES[3];
echo 'Category: ' . $bike->category . '<br />';

echo "<hr />";

echo "Bicycle: " . Bicycle::wheel_details() . "<br />";
echo "Unicycle: " . Unicycle::wheel_details() . "<br />";

//echo "<strong>WEIGHT KG</strong> <br />";
//$bike->set_weight_kg(5);
//echo $bike->weight_kg() . "<br />";
//echo $bike->weight_lbs() . "<br />";

//echo "<strong>WEIGHT LB</strong> <br />";
//$bike->set_weight_lbs(3);
//echo $bike->weight_kg() . "<br />";
//echo $bike->weight_lbs() . "<br />";


//echo $bike->name() . "<br>";
//echo $bike->weight_kg . "<br>";
//echo $bike->weight_lbs() . "<br>";

//$bike->set_weight_lbs(5);
//echo $bike->weight_kg . "<br>";
//echo $bike->weight_lbs() . "<br>";



function can_fly() {
  if ( $this->flying == "yes" ) {
      $flying_string = "can fly";
  } else {
      $flying_string = "is stuck on the ground";
  }
  return  $flying_string ;
}