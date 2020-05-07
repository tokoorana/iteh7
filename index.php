<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regina's document №5</title>
    
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>

    <script src="script.js"></script>
    <script src="auto.js"></script>
 
</head>
<body style = "background-color: rgba(235, 197, 225, 0.788);">


<?php include 'connection.php'; ?>
    
    <h1 style = "color: rgb(30, 25, 102);">Получение информации</h1>
    
    <h2><i>1. Полученный доход с проката по состоянию на выбранную дату:</h2></i>

        <input type="date" name="selected_date_rent" id = "date">
        <p><input value="Выбрать" type="button" onclick = "get1()" ></p>

    <table border = "1">
    <thead>
        <tr><th>cost_of_rent_by_date</th></tr>
    </thead>

    <tbody id = "res1">
    </tbody>
    </table>


    <table border = "1">
    <thead>
        <tr><th>cost_of_rent_by_date_previous</th></tr>
    </thead>

    <tbody id = "res1_previous">
    </tbody>
    </table>


    <! -- Автомобили выбранного производителя -->

        <h2><i>2. Автомобили по выбранному производителю:</i></h2>
        <select name="vendorname" id="vendorname">
            <?php
            $cursor = $collection->find([], ['projection' => ['vendor' => 1]]);
                foreach ($cursor as $abc) {
                    $vendorname = $abc['vendor'];
                    echo "<option value= '$vendorname' > $vendorname</option>";
                }
            ?>
        </select>
        <p><input value="Выбрать" type="button" onclick = "get2()" ></p>
    

    <table border = "1">
    <thead>
        <tr><th>auto_by_vendors</th></tr>
    </thead>

    <tbody id = "res2">
    </tbody>
    </table>

    <h2><i>3. Имеющиеся в данном пункте марки автомобилей:</h2></i>
        <p><input value="Выбрать" type="button" onclick = "get3()" ></p>
  
    <table border = "1">
    <thead>
        <tr><th>marks</th></tr>
    </thead>

    <tbody id = "table_f3">
  
    </tbody>
    </table>

</body>
</html>