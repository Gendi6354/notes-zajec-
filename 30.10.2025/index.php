<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Login:</p>
        <input type="text" name="login">
        <p>Password</p>
        <input type="password" name="haslo">
        <button name="zaloguj_butt">Zaloguj</button>
    </form>
    <?php
    if(isset($_POST["zaloguj_butt"]))
    {
        echo "<p>".$_POST["login"]." ".$_POST["haslo"];
    }

    mysqli_close($conn)
    ?>
</body>
</html>