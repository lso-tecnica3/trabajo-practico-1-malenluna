<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border="1">
<?php
for ($num=1 ; $num<=50 ; $num++){
    print "<tr>";
    print "<td>".$num."</td>";

    if($num % 3==0 && $num % 5==0){
        print "<td>FizzBuzz</td>";
    }elseif($num % 3==0){
        print "<td>Fizz</td>";
    }elseif($num % 5==0){
        print "<td>Buzz</td>";
    }else{
        print "<td></td>";
    } 
    print "</tr>";
}
?>
</table>
</body>
</html>

