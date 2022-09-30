<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>ENDEVINA EL NOMBRE</p>
    
    <?php
    
    session_start();
    if(!isset($_GET['endevina'])) {
        $_SESSION['ocult']=rand(1,100);
        echo "
        <form>
            <label>ENDEVINA</label>
            <input type='number' name='endevina'>
            <input type='submit'>
        </form>
        ";
    }
    else {
        if($_SESSION['ocult'] > $_GET['endevina']) {
            echo "<p> El numero a adivinar es mayor </p>";
            echo "
            <form>
            <label>ENDEVINA</label>
            <input type='number' name='endevina'>
            <input type='submit'>
            </form>";
        }
        else if($_SESSION['ocult'] < $_GET['endevina']) {
            echo "<p> El numero a adivinar es menor </p>";
            echo "
            <form>
            <label>ENDEVINA</label>
            <input type='number' name='endevina'>
            <input type='submit'>
            </form>";
        }
        else {
            echo "<p> El numero a adivinar es aquest </p>";
            echo "<a href='ex41pagina4.php'>TORNAR</a>";
        }
    }
    ?>
</body>
</html>