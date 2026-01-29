<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .but
    {
        /* height: 50px; */
        padding: 20px;
        /* width: 200px; */
        background-color: grey;
        font-size: 150%;
        border: 1px solid black;
        color: white;
        border-radius: 10px;
        margin-bottom: 100px;
    }
    </style>
</head>
<body>
    <a href="index_1.php" class="but">1</a>
    <form method="post">
    <select name="sel" >
        <option value="tab">tabele</option>
        <option value="kol">kolumny</option>
        <option value="bazy">bazy danych</option>
    </select>
    <button name="btn" >sprawdz</button>
    </form>
    <?php
    if(isset($_POST["btn"]))
    {
        if($_POST["sel"] == "tab")
        {
            $conn = mysqli_connect("localhost","root","","samochody_db");
            $q = "SHOW TABLES;";
            $res = mysqli_query($conn,$q);
            while($row = mysqli_fetch_row($res))
            {
                echo $row[0]."<br>";
            }
        }
        elseif($_POST["sel"] == "kol")
        {
            $conn = mysqli_connect("localhost","root","","samochody_db");
            $q = "SHOW COLUMNS FROM samochody;";
            $res = mysqli_query($conn,$q);
            while($row = mysqli_fetch_row($res))
            {
                echo $row[0]."<br>";
            }
        }
        elseif($_POST["sel"] == "bazy")
        {
            $conn = mysqli_connect("localhost","root","");
            $q = "SHOW DATABASES";
            $res = mysqli_query($conn,$q);
            while($row = mysqli_fetch_row($res))
            {
                echo $row[0]."<br>";
            }
        }
    }

    ?>
</body>
</html>