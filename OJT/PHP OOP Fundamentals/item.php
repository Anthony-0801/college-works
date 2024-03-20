<?php 
//Anthony A. Cabulang
//Batch 5 OJT February Cohort

class Item {
    public $name;
    public $price;
    public $stock;
    public $sold;

    public function __construct($name, $price, $stock) {
        echo "<br><br>Set the name, price, and stock <br>";
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        $this->sold = 0;
    }

    public function logDetails() {
        echo "<br>Logging details <br>";
        echo "Name: $this->name <br>";
        echo "Price: $this->price <br>";
        echo "Stock: $this->stock <br>";
        echo "Sold: $this->sold <br>";
    }

    public function buy() {
        if($this-> stock > 0) {
            echo "Buying <br>";
            $this->price;
            $this->stock--;
            $this->sold++;
        } else {
            echo "Out of stock <br>";
        }
    }

    public function return() {
        if ($this->sold > 0) {
            echo "Returning <br>";
            $this->price - $this->price;
            $this->stock++;
            $this->sold--;
        } else {
            echo "No item to return <br>";
        }
    }
}



$item1 = new Item("apple", 10, 100);
var_dump($item1);
$item1->buy();
$item1->buy();
$item1->buy();
$item1->logDetails();


$item2 = new Item("orange", 15, 100);
var_dump($item2);
$item2->buy();
$item2->buy();
$item2->return();
$item2->return();
$item2->logDetails();

$item3 = new Item("banana",20, 100);
var_dump($item3);
$item3->return();
$item3->return();
$item3->return();
$item3->logDetails();