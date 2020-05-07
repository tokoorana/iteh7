<?php 

    include 'connection.php';

    $cursor =  $collection_cars->distinct('mark_cars');
        foreach($cursor as $mark) {
            echo '<tr><td>' . $mark . '</td></tr>';
            }
   ?>