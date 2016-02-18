<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h1>RANDOM</h1>
        <?php
          for($i=0;$i<52;$i++){
            $num[$i] = rand(1,52);
            $n=0;
            while($n < $i){
              if($num[$i] == $num[$n]){
                //echo "New random $i ".$num[$i];
                $num[$i] = rand(1,52);
                $n = 0;
                //echo " > ".$num[$i]."<br>";
              }
              else{
                $n++;
              }
            }
          }
          echo "<table border=\"1\">";
            echo "<tr>";
            for($c=1;$c<=count($num);$c++){
              echo "<td>".$num[$c-1]."</td>";
              if($c % 4 == 0){
                echo "</tr><tr>";
              }
            }
            echo "</tr>";
          echo "</table>";
        ?>
      </center>
  </body>
</html>
