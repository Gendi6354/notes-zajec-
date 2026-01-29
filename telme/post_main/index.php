<?php
session_start();
if (!isset($_SESSION['logged_in']))
        {
            header("Location:../login/index.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Telme</title>
</head>
<body>
    
    <div id="Wstaw">
        <button id="close_win">X</button>
        <form method="post">
            <p id="header_input">Header:</p>
            <input id="header_input" type="text" name="header_input">
            <p id="text_input">text:</p>
            <textarea id="textarea_input" name="text_input"></textarea>
            <br>
            <button id="create_post"name="create_post">Create</button>
        </form>
    </div>
    <main>
        <button id="new_post">New Post</button>
        <form method="post">
            <button name="logout"id="logout" class="but_n">Logout</button>
        </form>
        <a href="../mess/index.php"><button id="mess" class="but_n">Massages</button></a>
        <?php
        $conn = mysqli_connect("localhost","root","","komunikator");
        $q = "SELECT user.name,post.header,post.text FROM post INNER JOIN user ON user.id = post.creator_id;";
        $result = mysqli_query($conn,$q);
        while($row = mysqli_fetch_row($result))
        {
            echo
            "
            <div class='post'>
            <p class='creator'>".$row[0]."</p>
            <p class='header'>".$row[1]."</p>
            <p class='post_text'>".$row[2]."</p>
            </div>
            ";
        }
        if(isset($_POST["create_post"]))
        {
            $header = $_POST['header_input'];
            $text = $_POST['text_input'];
            $q = "INSERT INTO post(creator_id,header, text) VALUES (1,'".$header."', '".$text."')";
            $result = mysqli_query($conn,$q);
            header("Refresh: 1");
        }
        if(isset($_POST["logout"]))
        {
            session_destroy();
        }
        ?>
    </main>
    <script src="script.js"></script>
</body>
</html>