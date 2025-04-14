<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table width="270px" border="1px">
   <?php
   for($m = 1; $m <= 8; $m++){
     print "<tr>";
      for($l = 1; $l <= 8; $l++){
      $total = $m + $l ;

      if ($total%2 == 0){
        print "<td height=30px width=30px bgcolor=black></td>";
      }
      else {
        print "<td height=30px width=30px bgcolor=white></td>";
      }
    
       }
       print"</tr>";
   }
    
    
     
  ?>
</body>
</html>
