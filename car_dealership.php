<?php
         class Car
  {
  public $make_model;
  public $price;
  public $miles;
  public $transmission;
  public $motor;

  function worthBuying($max_price)
 {
     return $this->price < $max_price;
 }
  function __construct($make_model, $price, $miles, $transmission, $motor)
  {
  $this->model = $make_model;
  $this->price = $price;
  $this->miles = $miles;
  $this->transmission = $transmission;
  $this->motor = $motor;
  }
}
  $porsche = new Car("2014 Porsche 911", 114991, 7864, "manual", "gas");
  $ford = new Car("2011 Ford 450 Superduty", 55995, 14241, "automatic","diesel");
  $lexus = new Car("2013 Lexus RX 350", 44700, 20000, "Automatic", "Gas");
  $mercedes = new Car("Mercedes Benz CLS550", 39900, 20000, "automatic","Gas");


    /*
}

  }
  $porsche = new Car();
  $porsche->make_model = "2014 Porsche 911";
  $porsche->price = 114991;
  $porsche->miles = 7864;
  $porsche->transmission = "manual";
  $porsche->motor = "Gas";

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

  */

        $cars = array($porsche, $ford, $lexus, $mercedes);


        $cars_matching_search = array();
        foreach ($cars as $car) {
            if ($car->worthBuying($_GET['price'])) {
                array_push($cars_matching_search, $car);
            }
        }


            ?>
            <!DOCTYPE html>
            <html>
            <head>
                <title>Your Car Dealership's Homepage</title>
            </head>
            <body>
                <h1>Your Car Dealership</h1>
                <ul>
                    <?php


                        foreach ($cars_matching_search as $car) {
                            echo "<li> $car->model </li>";
                            echo "<ul>";
                                echo "<li> $$car->price </li>";
                                echo "<li> Miles: $car->miles </li>";
                                echo "<li>Transmission: $car->transmission</li>";
                                echo "<li>Motor: $car->motor</li>";
                            echo "</ul>";
                        }
                    ?>
                </ul>
            </body>
            </html>
