<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudoku</title>
</head>
<body>

<table border="1">
    <form action="" method="POST">
        <?php
        include 'FuncionsComprovacions.php';
            for($fila=0;$fila<9;$fila++){
                echo "<tr>\n";
                for($columna=0;$columna<9;$columna++){
                    echo "<td>\n<select name='casilla$fila-$columna' id='numSelect'>\n";
                    echo "<option ></option>\n";
                    for($k=1;$k<10;$k++){
                        if($k == $_POST['casilla'.$fila."-".$columna]){
                            echo "<option selected >$k</option>\n";
                        }
                        else{
                            echo "<option >$k</option>\n";
                        }

                    }
                    echo "</select>";
                    echo "</td>\n";
                    }
                    echo "</tr>";
            }
        ?>
        <input type="submit">
    </form>
    <?php


    ?>


</table>



</body>
</html>