<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/homepage.css">
        <link rel="stylesheet" href="css/top-menu.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>

    <?php
        $type = strval($_GET['q']);

        $con = mysqli_connect('localhost','timhyp53','','my_timhyp53');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con,"my_timhyp53");
        $sql="SELECT * FROM " . $type . " LIMIT 3";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)) {
            if($row['Sito']){
                echo "<a href='" . str_replace(' ','-',$row['Nome']) . ".html'>";
            }
            echo "<div class='device'>";
            if($type == "Smartphone"){
                echo "<img src='pics/phones/" . $row['Nome'] . ".jpg'/>";
            } else if($type == "Tablet"){
                echo "<img src='pics/tablets/" . $row['Nome'] . ".jpg'/>";
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