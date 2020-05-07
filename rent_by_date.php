<?php
 
  include 'connection.php';
  
  $cursor = $collection->find([], ['projection' => ['date_end' => 1, 'cost' => 1]]);
  $selected_date = $_GET["date"];

    $selected_date = new DateTime($selected_date);
    $selected_date = $selected_date->format("Y-m-d");

    $price = 0;

foreach ($cursor as $abc) {
    $var = $abc['date_end'];
    $date = $var->toDateTime()->format("Y-m-d");
        if($selected_date >= $date) {
            $price += $abc['cost'];
        }
    }
        echo  $price;
?>