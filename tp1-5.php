<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border="1">
    <?php
    $filas=20;
    for ($fil=0 ; $fil<$filas ; $fil++){
        print "<tr>";
        for ($col=0 ; $col<$filas ; $col++){
            if ($fil==$col){
                $color="lime"; 
            }elseif ($fil>$col){
                $color="red"; 
            }else{
                $color="blue"; 
            }
            print "<td bgcolor='$color' width='20' height='20'></td>";
        }
        print "</tr>"; 
    }
    ?>
</table>
</body>
</html>
