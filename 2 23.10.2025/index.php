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
    echo "<table><tbody>";
    for($i =0; $i<30;$i++)
    {
        echo "<tr>";
      for($j =0; $j<30;$j++)
        {
            if(rand(0,2) == 1)
            {
                echo "<td class='black'></td>";
            }
            else
            {
               echo "<td class='white'></td>"; 
            }

        }  
        echo "</tr>";
        
    }
    echo "</tbody></table>";

    ?>
</body>
</html>