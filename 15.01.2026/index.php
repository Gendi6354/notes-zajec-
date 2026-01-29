<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Dane o zwierzętach</title>
</head>
<body>
    <header>

    </header>
    <div id="form_div">
        <ol>
            <li>Ryby</li>
            <li>Płazy</li>
            <li>Gady</li>
            <li>Ptaki</li>
            <li>Ssaki</li>
        </ol>
        <form method="post" >
        Wybierz gromadę: <input name="input" type="number"> <button name="btn_set" id="btn">Wyświetl</button>
        </form>
        <?php
            $conn = mysqli_connect("localhost","root","","baza");
            if(isset($_POST["btn_set"]))
            {
                $value = $_POST["input"];
                switch($value)
                {
                    case 1; 
                    echo "<h2>RYBY</h2>";
                    break;
                    case 2; 
                    echo "<h2>PŁAZY</h2>";
                    break;
                    case 3; 
                    echo "<h2>GADY</h2>";
                    break;
                    case 4; 
                    echo "<h2>„PTAKI/h2>";
                    break;
                    case 5; 
                    echo "<h2>SSAKI</h2>";
                    break;  
                }
                $q = "SELECT gatunek,wystepowanie FROM zwierzeta INNER JOIN gromady on Zwierzeta.Gromady_id = gromady.id WHERE gromady.id = ".$value.";";
                $result = mysqli_query($conn,$q);
                while($row = mysqli_fetch_row($result))
                {
                    echo "<p".$row[0]."</p>";
                    echo "<p".$row[1]."</p>";
                }
                $q = "SELECT zwierzeta.id, gatunek, nazwa FROM zwierzeta join gromady on zwierzeta.Gromady.id = gromady.id;";
                $result = mysqli_query($conn,$q);
                while($row = mysqli_fetch_row($result))
                {
                    echo "<p".$row[0]."</p>";
                    echo "<p".$row[1]."</p>";
                    echo "<p".$row[2]."</p>";
                }
            }

            mysqli_close($conn);

        ?>
    </div>
    <aside class="mid_div">

    </aside>
    <main class="mid_div">

    </main>
    <aside class="mid_div">

    </aside>
    <footer>

    </footer>

</body>
</html>