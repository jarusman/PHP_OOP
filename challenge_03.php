<?php

   class Bicycle {
       public $brand;
       public $model;
       public $year;
       public $description;
       private $weight_kg;
       protected $wheels = 2;

       public function name()
       {
           $fname = $this->brand;
           $mname = $this->model;
           $lname = $this->year;
           return $fname."_".$mname."_".$lname;
       }

       public function weight_lbs()
       {
           $wtInKg = $this->weight_kg;
           $wtInLbs = $wtInKg * 2.2046226218;
           return floatval($wtInLbs)."  lbs";
       }

       public function weight_kg() {
           return $this->weight_kg . " kg";
       }

       public function set_weight_kg($value){
           $this->weight_kg = floatval($value);
       }

       public function set_weight_lbs($wtInLbs)
       {
           $wtInKg = $wtInLbs /2.2046226218;
           $this->weight_kg = $wtInKg;
           return floatval($wtInKg)." kg";
       }

       public function wheels_details()
       {
           $wheel_string= $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels ";
           return "It has ".$wheel_string;
       }

   }

   class Unicycle extends Bicycle {
    protected $wheels = 1;

   }

   $bicycle1 = new Bicycle;
   $bicycle2 = new Bicycle;
   $bicycle3 = new Bicycle;

   $unicycle =  new Unicycle;

   $bicycle1->brand="Mountain";
   $bicycle2->brand="CityBike";
   $bicycle3->brand="Roadster";

   echo $bicycle1->wheels_details()."<br/><br/>";
   
   echo $unicycle->wheels_details()."<br/><br/>";

   $bicycle1->model="M1360";
   $bicycle2->model="CT100";
   $bicycle3->model="R180";

   $bicycle1->year="2010";
   $bicycle2->year="2010";
   $bicycle3->year="2010";

   $bicycle1->description="It's a mountain bike";
   $bicycle2->description="It's a city bike";
   $bicycle3->description="It's a mountain/city bike";

   //$bicycle1->weight_kg=20;
   //$bicycle2->weight_kg=15;
   //$bicycle3->weight_kg=25;

   echo $bicycle1->name()."<br/>";
   echo $bicycle2->name()."<br/>";
   echo $bicycle3->name()."<br/><br/><br/>";

   echo $bicycle1->weight_lbs()."<br/>";
   echo $bicycle2->weight_lbs()."<br/>";
   echo $bicycle3->weight_lbs()."<br/><br/><br/>";

   echo $bicycle1->set_weight_lbs(44)."<br/>";
   echo $bicycle2->set_weight_lbs(40)."<br/>";
   echo $bicycle3->set_weight_lbs(45)."<br/><br/><br/>";

?>