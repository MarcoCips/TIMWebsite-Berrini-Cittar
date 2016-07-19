<?php
    header('Access-Control-Allow-Origin: *');
    $device = strval($_GET['d']);
    $filter = strval($_GET['f']);

    $con = mysqli_connect('localhost','timhyp53','','my_timhyp53');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_set_charset($con,"utf8");

    mysqli_select_db($con,"my_timhyp53");
    if(strpos($device, '-') !== false){
        $sql="SELECT Nome,Prezzo,Sconto,Tipologia,Sito FROM Smartphone WHERE (1=1" . $filter . ") UNION SELECT Nome,Prezzo,Sconto,Tipologia,Sito FROM Tablet WHERE (1=1" . $filter . ")";
    } else {
        $sql="SELECT Nome,Prezzo,Sconto,Sito,Tipologia FROM " . $device . " WHERE 1=1" . $filter;
    }
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)) {
        if($row['Sito']){
            if($row['Tipologia']=='Smartphone' || $row['Tipologia']=='iPhone'){
                echo "<a href='../dispositivi/smartphone-e-telefoni/" . str_replace(' ','-',$row['Nome']) . ".html'>";
            } else {
                echo "<a href='../dispositivi/tablet-e-computer/" . str_replace(' ','-',$row['Nome']) . ".html'>";
            }
        }
        
        echo "<div class='device'>";
        
        if($row['Tipologia']=='Smartphone' || $row['Tipologia']=='iPhone'){
            echo "<img src='../pics/phones/" . $row['Nome'] . ".jpg'/>";
        } else {
            echo "<img src='../pics/tablets/" . $row['Nome'] . ".jpg'/>";
        }
        
        echo "<h4>" . $row['Nome'] . "</h4>";
        if(floatval($row['Sconto']) > 0){
            echo "<h4><strike>" . $row['Prezzo'] . " €</strike></h4>";
            echo "<h3 style='margin-top:-7px'>" . (floatval($row['Prezzo']) - floatval($row['Sconto'])) . "0 €</h3>";
        } else {
            echo "<h3>" . $row['Prezzo'] . " €</h3>";
        }
        echo "</div>";
        if($row['Sito']){
            echo "</a>";
        }
    }
    mysqli_close($con);
?>