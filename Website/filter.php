<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/homepage.css">
        <link rel="stylesheet" href="css/top-menu.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>

    <?php
        $device = strval($_GET['d']);
        $filter = strval($_GET['f']);

        $con = mysqli_connect('localhost','timhyp53','','my_timhyp53');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con,"my_timhyp53");
        if(strpos($device, '-') !== false){
            $sql="SELECT Nome,Prezzo,Sconto,Tipologia FROM Smartphone WHERE (1=1" . $filter . ") UNION SELECT Nome,Prezzo,Sconto,Tipologia FROM Tablet WHERE (1=1" . $filter . ")";
        } else {
            $sql="SELECT Nome,Prezzo,Sconto FROM " . $device . " WHERE 1=1" . $filter;
        }
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)) {
            if($row['Sito']){
                echo "<a href='" . str_replace(' ','-',$row['Nome']) . ".html'>";
            }
            echo "<div href='apple-iphone-6s.html' class='device'>";
            if($device=='Smartphone'){
                echo "<img src='pics/phones/" . $row['Nome'] . ".jpg'/>";
            } else if($device=='Tablet') {
                echo "<img src='pics/tablets/" . $row['Nome'] . ".jpg'/>";
            } else {
                if($row['Tipologia']=='Smartphone' || $row['Tipologia']=='iPhone'){
                    echo "<img src='pics/phones/" . $row['Nome'] . ".jpg'/>";
                } else {
                    echo "<img src='pics/tablets/" . $row['Nome'] . ".jpg'/>";
                }
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

    </body>
</html>