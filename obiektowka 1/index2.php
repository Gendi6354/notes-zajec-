
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$conn = new mysqli("localhost","root","");
$q = "SHOW DATABASES";
$result = $conn->query($q);
echo "<form method='post'><select name='jajko'>";
while($row = $result->fetch_object())
{
    echo "<option value='".$row->Database."'>".$row->Database."</option>";

}
echo "</select><button name='btn'>wybierz</button></form>";
if(isset($_POST["btn"]))
{
        $conn = new mysqli("localhost","root","",$_POST["jajko"]);
    $q = "SHOW TABLES";
    $result = $conn->query($q);
    while($row = $result->fetch_object())
    {
        echo $row->Table1;

    }
}
?>
