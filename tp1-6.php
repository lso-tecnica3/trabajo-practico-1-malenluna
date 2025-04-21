<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <?php
        for ($col=0 ; $col<5 ; $col++) {
            print "<td>";
            for ($fil=1; $fil<=10; $fil++) {
                $num=$col * 10+$fil;
                print "• " . $num . "<br>";
            }
            print "</td>";
        }
        ?>
        </tr>
        <tr>
        <?php
        for ($col=0 ; $col<5 ; $col++) {
            print "<td>";
            $inicio=100 - ($col * 10); 
            for ($fil=1 ; $fil<=10 ; $fil++) {
                print $fil.". ".($inicio - $fil + 1) . "<br>";
            }
            print "</td>";
        }
        ?>
    </tr>
</table>
</body>
</html>


