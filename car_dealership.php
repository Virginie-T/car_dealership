<?php
         class Car
  {
  public $make_model;
  public $price;
  public $miles;
  public $transmission;
  public $motor;


  }
  $porsche = new Car();
  $porsche->make_model = "2014 Porsche 911";
  $porsche->price = 114991;
  $porsche->miles = 7864;
  $porsche->transmission = "manual";

  $ford = new Car();
  $ford->make_model = "2011 Ford 450 Superduty";
  $ford->price = 55995;
  $ford->miles = 14241;
  $ford->transmission = "Automatic";
  $ford->motor = "Diesel";

  $lexus = new Car();
  $lexus->make_model = "2013 Lexus RX 350";
  $lexus->price = 44700;
  $lexus->miles = 20000;
  $lexus->transmission = "Automatic";
  $lexus->motor = "Gas";

  $mercedes = new Car();
  $mercedes ->make_model = "Mercedes Benz CLS550";
  $mercedes ->price = 39900;
  $mercedes ->miles = 37979;
  $mercedes ->transmission = "Automatic";
  $mercedes ->motor = "Gas";

        $cars = array($porsche, $ford, $lexus, $mercedes);

        $cars_matching search = array();
        foreach ($cars as $car) {
            if ($car->price < $_GET["price"]) {
                array_push($cars_matching_search, $car);
            }
        }


            ?>
