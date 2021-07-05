<?php
$mysqli = new mysqli("localhost","root","","tienda");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guardar.php" method='post'>
        nombre <input type="text" name='nombre'><br>
        carnet <input type="text" name='carnet'><br>
        direccion <input type="text" name='direccion'><br>
        <input type="submit" >
    </form>
    <table border=1>
        <tr>
            <td>#</td>
            <td>nombre</td>
            <td>carnet</td>
            <td>direccion</td>
            <td>Opciones</td>
        </tr>
        <?php
            $query="SELECT * FROM personal";
            $c=0;
            if($result=$mysqli->query($query)){
                while($row=$result->fetch_row()){
                    $c++;
                    echo "<tr>
                        <td>$c</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                        <td>".$row[3]."</td>   
                        <td><a href='eliminar.php?id=".$row[0]."'>Eliminar</a></td> 
                    </tr>";
                }
            }
        ?>

    </table>
    
</body>
</html>