<?php

//Anthony A. Cabulang
//Batch 5 OJT February Cohort

class House {
    public $location;
    public $price;
    public $lot;
    public $type = "Pre-Selling";
    public $discount;
    public $total_price;

    public function __construct($location, $price, $lot, $type) {
        $this->location = $location;
        $this->price = $price;
        $this->lot = $lot;
        $this->type = $type;
    }

    public function show_all() {
        echo "<br>Showing all details <br>";
        echo "Location: $this->location <br>";
        echo "Price: $this->price <br>";
        echo "Lot: $this->lot <br>";
        echo "Type: $this->type <br>";

        if($this->type == "Pre-Selling") {
            $this->discount = 0.2;
            $this->total_price = $this->price - ($this->price * $this->discount);
            echo "Discount: $this->discount <br>";
            echo "Total Price: $this->total_price <br>";
        } else {
            $this->discount = 0.05;
            $this->total_price = $this->price - ($this->price * $this->discount);
            echo "Discount: $this->discount <br>";
            echo "Total Price: $this->total_price <br>";
        }
    }
}

$house1 = new House("La Union", 1500000, "100sqm", "Pre-Selling");
$house1->show_all();

$house2 = new House("Metro Manila", 1000000, "150sqm", "Ready for Occupancy");
$house2->show_all();

$house3 = new House("Baguio", 2000000, "150sqm", "Ready for Occupancy");
$house3->show_all();

$house4 = new House("Cebu", 2500000, "200sqm", "Pre-Selling");
$house4->show_all();

$house5 = new House("Davao", 3000000, "200sqm", "Pre-Selling");
$house5->show_all();


