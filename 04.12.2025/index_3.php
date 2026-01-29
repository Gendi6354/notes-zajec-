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

    table, td, tr{
        border-collapse: collapse;
    }

    .black{
        background-color: black;
        width: 5px;
        height: 5px
    }
    .white{
        background-color: green;
        width: 5px;
        height: 5px;
    }
    </style>
</head>
<body>
    <a href="index_1.php" class="but">1</a>
    <table>
        <tbody>
            <?php
        for($i =  0; $i < 50; $i++){
            echo "<tr>";
            for($j = 0; $j < 50; $j++){
                if($i == 24){
                    echo "<td class='black'></td>";
                } else {
                    echo "<td class='white'></td>";
                }
            }
            echo "</tr>";
        }    

    ?>
        </tbody>
    </table>
</body>