<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h1>RANDOM</h1>
      <form action="#" method="post">
        Rows : <input type="number" name="row"><br>
        Input : <input type="number" name="colum"><br>
        <input type="submit" value="Submit"><br><br>
      </form>
      <?php
        if($_POST){
          $row = $_POST["row"];
          $col = $_POST["colum"];

          for($i=0;$i<$row*$col;$i++){
            $num[$i] = rand(1,$row*$col);
            $n=0;
            while($n < $i){
              if($num[$i] == $num[$n]){
                //echo "New random $i ".$num[$i];
                $num[$i] = rand(1,$row*$col);
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
              if($c % $col == 0){
                echo "</tr><tr>";
              }
            }
            echo "</tr>";
          echo "</table>";
        }
      ?>
    </center>
  </body>
</html>
