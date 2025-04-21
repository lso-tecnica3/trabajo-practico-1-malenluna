<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
  .linea{
    background-color:pink;
  }
</style>
<table border="1" class="tablita">
   <?php
    print "<th class='linea'>X</th>";
   for($l = 1; $l <= 10; $l++){
    print "<th class='linea'>".$l."</th>";
   }
    for($i = 1; $i <= 10; $i++){
      print "<tr><th class='linea'>".$i."</th>";

      for($a = 1 ; $a<=10 ; $a++){
        print"<td>".$total= $a * $i."</td>";
      }
      print"</tr>";
    }
     
  ?>
</table>           
</body>
</html>
