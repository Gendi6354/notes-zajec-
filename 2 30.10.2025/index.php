<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost","root","","samochody_db");
    $q = "SHOW COLUMNS FROM samochody";
    $result = mysqli_query($conn,$q);
    echo "<form method='post'><select name='opcja'>";
    while($row = mysqli_fetch_row($result))
    {
        echo "<option value='".$row[0]."'>".$row[0]."</option>";
    }
    echo "</select>
    <button name='butt_from'>wybierz</button>
    </form>";


    if(isset($_POST["butt_from"]))
    {
        $a = "SELECT ".$_POST["opcja"]." FROM samochody";
        $result_a = mysqli_query($conn,$a);
        echo "<table><tbody>";
        while($row = mysqli_fetch_row($result_a))
        {
            echo "<tr><td>".$row[0]."</td></tr>";
        }
        echo "</tbody></table>";
        mysqli_close($conn);
    }
    
        
    ?>
</body>
</html>