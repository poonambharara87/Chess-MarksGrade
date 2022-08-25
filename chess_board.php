
<!DOCTYPE html>
<html>
    <head>
        <title>Learn HTML & CSS</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UI-Compatible" content="IE-Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">       

    </head>

    <body>
        <main>
            <h2>Chess Board</h2>
                <?php
                echo "<table style='border:2px solid black; '>";
                for($i=1;$i<=8;$i++){

                    echo "<tr>";
                    for($j=1;$j<=8;$j++){
                        
                        $k = $i + $j; 
                        if($k % 2 == 0){
                            echo "<td style='border:1px solid black; background-color:black;padding:15px 20px;'></td>";
                        }else{
                            echo "<td class= 'border:1px solid black; background-color:white;'></td>";
                        }
                    }
                    echo "</tr>";
                    echo"<br>";
                }
                echo "</table>";
                ?> 

        </main>

        <footer>
            <!-- hexacode of @ -->
            <p class="copyright text-gray">@Copyright 2022 by Poonam All Rights Reserved.</p>
        </footer>

    </body> 
</html>
        