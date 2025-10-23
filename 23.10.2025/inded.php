<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost","root","","samochody_db");
    $q = "SELECT * FROM samochody";
    $result = mysqli_query($conn,$q);
    echo "<table><tbody>";
    while($row = mysqli_fetch_row($result))
    {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
    }
    echo "</tbody></table>";


    ?>
</body>
</html>