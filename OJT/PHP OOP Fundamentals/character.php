<?php
//Anthony A. Cabulang
//Batch 5 OJT February Cohort

class Character {
    public $name;
    public $health;
    public $stamina;
    public $mana;

    public function __construct($name) {
        echo "<br><br>Set the name, health, stamina, and mana <br>";
        $this->name = $name;
        $this->health = 100;
        $this->stamina = 100;
        $this->mana = 100;
    }

    public function walk() {
        echo "Walking <br>";
        $this->stamina--;
        return $this;
    }

    public function run() {
        echo "Running <br>";
        $this->stamina -= 3;
        return $this;
    }

    public function showStats() {
        echo "<br>Showing stats <br>";
        echo "Name: $this->name <br>";
        echo "Health: $this->health <br>";
        echo "Stamina: $this->stamina <br>";
        echo "Mana: $this->mana <br>";
        return $this;
    }
}

$character = new Character("Anthony");
$character->walk()->walk()->walk()->run()->run()->showStats();


class Shaman extends Character {

    public function __construct($name) {
        parent::__construct($name);
        $this->health = 150;

        echo "Shaman created <br>";
    }
    public function heal() {
        echo "Healing <br>";
        $this->health += 5;
        $this->stamina += 5;
        $this->mana += 5;
        return $this;
    }
}

$shaman = new Shaman("Shaman Lu");
$shaman->walk()->walk()->walk()->run()->run()->heal()->showStats();


class Swordsman extends Character {

    public function __construct($name) {
        parent::__construct($name);
        $this->health = 170;

        echo "Swordsman created <br>";
    }
    public function slash() {
        echo "Attacking <br>";
        $this->mana -= 10;
        return $this;
    }

    public function showStats() {
        echo "<br>I am powerful!<br>";
        parent::showStats();
        return $this;
    }
}

$swordsman = new Swordsman("Swordsman Yi");
$swordsman->walk()->walk()->walk()->run()->run()->slash()->slash()->showStats();

//Testing to call out character functions from subclasses of shaman and swordsman
//It doesn't work when you call it 
//$character->heal();
//$character->slash();