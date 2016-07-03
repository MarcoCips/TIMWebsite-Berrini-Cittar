<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$con = mysqli_connect('localhost','timhyp53','','my_timhyp53');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"my_timhyp53");
$sql="SELECT * FROM Smartphone";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Tipo</th>
<th>Nome</th>
<th>Prezzo</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Tipologia'] . "</td>";
    echo "<td>" . $row['Nome'] . "</td>";
    echo "<td>" . $row['Prezzo'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>