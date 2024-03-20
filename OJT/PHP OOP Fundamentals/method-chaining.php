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
        return $this;
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
        return $this;
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
        return $this;
    }
}



$item1 = new Item("apple", 10, 100);
var_dump($item1);
$item1->buy()->buy()->buy()->logDetails();



$item2 = new Item("orange", 15, 100);
var_dump($item2);
$item2->buy()->buy()->return()->return()->logDetails();


$item3 = new Item("banana",20, 100);
var_dump($item3);
$item3->return()->return()->return()->logDetails();
