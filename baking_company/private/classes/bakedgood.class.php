<?php

class BakedGood extends DatabaseObject {

  static protected $table_name = 'baked_goods';
  static protected $db_columns = ['id', 'type', 'name', 'ingredients', 'cuisine', 'season', 'price', 'calories', 'rating', 'meal', 'description'];

  public $name
  public $type
  public $rating
  public $price
  public $description
  public $calories
  public $ingredients
  public $cuisine
  public $meal
  public $season

  
  public const CONDITION_OPTIONS = [
    1 => 'Bread',
    2 => 'Breakfast Pastries',
    3 => 'Desserts',
  ];

  public const SEASONS = ['Fall', 'Winter', 'Spring', 'Summer'];


  public function __construct($args=[]) {
    //$this->brand = isset($args['brand']) ? $args['brand'] : '';
    $this->name = $args['name'] ?? '';
    $this->type = $args['type'] ?? '';
    $this->rating = $args['rating'] ?? 0;
    $this->price = $args['price'] ?? 0.0;
    $this->description = $args['description'] ?? '';
    $this->calories = $args['calories'] ?? 0.0;
    $this->ingredients = $args['ingredients'] ?? '';
    $this->cuisine = $args['cuisine'] ?? '';
    $this->meal = $args['meal'] ?? 0;
    $this->season = $args['season'] ?? '';
    

    // Caution: allows private/protected properties to be set
    // foreach($args as $k => $v) {
    //   if(property_exists($this, $k)) {
    //     $this->$k = $v;
    //   }
    // }
  }

  public function name() {
    return "{$this->brand} {$this->model} {$this->year}";
  }
  //deprecated due to no more weight detail:
  // public function weight_kg() {
  //   return number_format($this->weight_kg, 2) . ' kg';
  // }

  // public function set_weight_kg($value) {
  //   $this->weight_kg = floatval($value);
  // }

  // public function weight_lbs() {
  //   $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
  //   return number_format($weight_lbs, 2) . ' lbs';
  // }

  // public function set_weight_lbs($value) {
  //   $this->weight_kg = floatval($value) / 2.2046226218;
  // }

  public function meal_type() {
    if($this->meal > 0) {
      return self::MEAL_OPTIONS[$this->];
    } else {
      return "Unknown";
    }
  }

  protected function validate() {
    $this->errors = [];

    if(is_blank($this->name)) {
      $this->errors[] = "Name cannot be blank.";
    }
    if(is_blank($this->price)) {
      $this->errors[] = "Price cannot be blank.";
    }
    return $this->errors;
  }


}

?>
