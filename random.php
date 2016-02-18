<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1">
      <?php
        for($r=0;$r<4;$r++){
          echo "<tr>";
          for($c=0;$c<13;$c++){
            echo "<td>".rand(1,52)."</td>";
          }
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>
