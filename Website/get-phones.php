<!DOCTYPE html>
<html>
<head></head>
<body>

<?php
$con = mysqli_connect('localhost','timhyp53','','my_timhyp53');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"my_timhyp53");
$sql="SELECT * FROM Smartphone";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo "<div class='device'>";
    echo "<img src='pics/phones/Apple iPhone 6S.jpg'>/";
    echo "<h4>" . $row['Nome'] . "</h4>";
    echo "<h3>" . $row['Prezzo'] . " €</h3>";
    echo "</div>";
}
mysqli_close($con);
?>
</body>
</html>