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
                <button name="login_btn" id="login_btn">LOGIN</button>
                
            </div>
            
            
            <div id="errors"></div>
            </div>

            </div>
        </form>
        <a href="register/index.php" id="reg">
                    <button >CREATE A ACCOUNT</button>
        </a>     
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
        $q = "SELECT id,Name,Password FROM user WHERE Name = '".$_POST["name_i"]."';";
        if($pass = mysqli_fetch_row(mysqli_query($conn,$q)))
        {
            if($pass[2] == $_POST["password_i"])
            {
                session_start();
                $_SESSION['logged_in'] = true;
                $_SESSION["user_id"]= $pass[0];
                $_SESSION["user_name"] = $pass[1];
                header("location: ../post_main/index.php");
            }
            else
            {
                ?> <script>bladLogowania()</script><?php
            }
        }
        
        
    }

    ?>
</body>
</html>