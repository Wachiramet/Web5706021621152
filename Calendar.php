<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>

    <form action="#" method="post">
      Enter month : <input type="text" name="month">
      <input type="submit" alue="Submit">
    </form>

    <?php
    if($_POST){
      $week = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
      $month = array("jan"=>31,"feb"=>28,"mar"=>31,"apr"=>30,"may"=>31,"jun"=>30,"jul"=>31,"aug"=>31,"sep"=>30,"oct"=>31,"nov"=>30,"dec"=>31);
      if(date("Y")%4==0){$month["feb"] = 29;}
      $startday = ((date("Y")+((date("Y")-1)/4)+6)%7);

      $inMonth = strtolower(substr($_POST["month"],0,3));
      $sum = 0;
      foreach ($month as $key => $value) {
        if($key == $inMonth){break;}
        $sum += $value;
      }

      $startday = ((($sum)%7) + $startday)%7;

      $max = 42;
      if(isset($month[$inMonth])){
        if((42 - ($month[$inMonth] + $startday)) >= 7){
          $max -= 7;
        }
        echo $_POST["month"]." ".date("Y");
        echo "<table border=\"1\"><tr>";
        foreach ($week as $weekday) {
          echo "<td align=\"center\" width=\"80\">".$weekday."</td>";
        }
        echo "</tr><tr>";
        for($n=1;$n<=$max;$n++){
          if(($n - $startday)>0 && $n <= $month[$inMonth] + $startday){
            echo "<td align=\"center\">".($n - $startday)."</td>";
          }else{
            echo "<td> </td>";
          }
          if($n%7==0){
            echo "</tr><tr>";
          }
        }
        echo "</tr></table>";
      }else{
        echo "Please enter month again.";
      }
    }
    ?>
    </center>
  </body>
</html>
