<html>
    <body>
        <h4>Football Players</h4>
        <?php
        echo"<center>";
            $names=["ron","ney","mes"];
            $roles=["str", "LW", "CF"];
            echo"<table border='1'>
                    <tr>
                        <td>SL No</td>
                        <td>Names</td>
                        <td>Roles</td>
                    </tr>";

            for($i=0; $i <count($names); $i++){
                echo"<tr>
                        <td>" . ($i+1) ."</td>
                        <td>$names[$i]</td>
                        <td>$roles[$i]</td>
                
                    </tr>";
                

            }

            echo"</table>";
            echo"</center>";
        ?>
    </body>
</html>
