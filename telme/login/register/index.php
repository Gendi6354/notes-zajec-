<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Telme</title>
</head>
<body>
    <div id="main">
        <form method="post" id="main_from">
            <div id="name_div">
                <p id="name_p">Name:</p>
                <input type="text" name="name_i" id="name_i">
            </div>
            <div id="password_div">
                <p id="password_p">Password:</p>
                <input type="password" name="password_i" id="password_i">
            </div>

            <div id="button_div">
                <button name="login_btn" id="login_btn">REGISTER</button>
            </div>
            <div id="errors">

            </div>
        </form>
    </div>
    <?php
    try
    {
        $conn = mysqli_connect("localhost","root","","komunikator");
    }
    catch(Exception)
    {
        ?> <script>bladBazy()</script><?php

    }
    if(isset($_POST["login_btn"]))
    {
        $q = "INSERT INTO user(Name,Password) values('".$_POST["name_i"]."','".$_POST["password_i"]."')";
        mysqli_query($conn,$q);
        header("Location:../index.php");
    }

    ?>
</body>
</html>