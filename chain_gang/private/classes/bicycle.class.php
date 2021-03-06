<?php

class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $category;
    public $color;
    public $description;
    public $gender;
    public $price;
    protected $weight_kg;
    protected $condition_id;

    public const CATEG= array('Road','Mountain','Hybrid','Cruiser', 'City', 'BMX');
    public const GENDERS= array('mens', 'womens', 'unisex');

    protected const CONDITION_OPTIONS = [
        1=>'Beat up',
        2=>'Decent',
        3 => 'Good',
        4 => 'Great',
        5 => 'Like New'
    ];
    public function __construct($args=[])
    {
        $this->brand = $args['brand'] ?? '';
        $this->model = $args['model'] ?? '';
        $this->year = $args['year'] ?? '';
        $this->category = $args['category'] ?? '';
        $this->color = $args['color'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->gender = $args['gender'] ?? Null;
        $this->price = $args['price'] ?? Null;
        $this->weight_kg = $args['weight_kg'] ?? 0.0;
        $this->condition_id = $args['condition_id'] ?? 3;
        // Caution: allows private/protected properties to be set    
        /*foreach($args as $k => $v) {
            if(property_exists($this, $k)){
                $this->k = $v;
            }
        }*/

    }


    function asDollars($value) {
        if ($value<0) return "-".asDollars(-$value);
        return '$' . number_format($value, 2);
      }

    public function weight_kg() {
        return $this->weight_kg . " kg";
    }

    public function set_weight_kg($value){
        $this->weight_kg = floatval($value);
    }


    public function weight_lbs()
    {
        $wtInKg = $this->weight_kg;
        $wtInLbs = $wtInKg * 2.2046226218;
        return floatval($wtInLbs)."  lbs";
    }

    public function set_weight_lbs($wtInLbs)
    {
        $wtInKg = flaotval($wtInLbs) /2.2046226218;
        $this->weight_kg = $wtInKg;
        //return floatval($wtInKg)." kg";
    }

    public function condition() {
        if($this->condition_id > 0) {
            return self::CONDITION_OPTIONS[$this->condition_id];
        } else {
            return "Unknown";
        }
    }

}

?>

