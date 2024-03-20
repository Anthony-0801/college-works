<?php
//Anthony A. Cabulang
//Batch 5 OJT February Cohort

class HTML_Generator {
    public function render_input($items) {
        foreach ($items as $item) {
            foreach($item as $key => $value) {
                echo "<label>$key</label>";
                echo "<input type='text' value='$value'>";
                echo "<br>";
            }
        }
    }

    public function render_list($items, $list_type = "unordered") {
        if ($list_type === "ordered") {
            echo "<ol>";
            foreach ($items as $item) {
                echo "<li>$item</li>";
            }
            echo "</ol>";
        } elseif ($list_type === "unordered") {
            echo "<ul>";
            foreach ($items as $item) {
                echo "<li>$item</li>";
            }
            echo "</ul>";
        } else {
            echo "Invalid list type. Please choose 'ordered' or 'unordered'.";
        }
    }
}

// Sample usage for rendering input
$items_info = [
    ["name" => "Bag", "price" => "250", "stocks" => "10"],
    ["name" => "Shoes", "price" => "150", "stocks" => "20"]
];
$items_info1 = [
    ["name" => "Anthony", "age" => 21],
    ["name" => "John", "age" => 22],
    ["name" => "Doe", "age" => 23],
];

// Sample usage for rendering list
$items_list = ["Apple", "Banana", "Cherry"];
$items_list1 = ["dog", "cat", "bird", "fish", "hamster", "rabbit", "turtle", "snake", "lizard", "iguana", "parrot", "cockatoo", "macaw", "canary", "finch", "lovebird", "budgerigar"];


$html_generator = new HTML_Generator();

$html_generator->render_input($items_info);
echo "<br><br><br>";
$html_generator->render_input($items_info1);

$html_generator->render_list($items_list, "ordered");
$html_generator->render_list($items_list1, "unordered");


