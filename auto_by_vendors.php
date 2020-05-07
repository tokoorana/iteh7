<?php

include 'connection.php';

    $vendor = $_REQUEST["vendorname"];
    $cursor = $collection->find(['vendor' => $vendor], ['projection' => [ 'id' => 0]]);
    foreach($cursor as $document){
        echo $document['name_cars'];
    }
?> 