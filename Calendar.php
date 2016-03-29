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
      $week = array(
        "en"=>array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"),
        "th"=>array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์"));
      $month = array("jan"=>31,"feb"=>28,"mar"=>31,"apr"=>30,"may"=>31,"jun"=>30,"jul"=>31,"aug"=>31,"sep"=>30,"oct"=>31,"nov"=>30,"dec"=>31);
      if(date("Y")%4==0){$month["feb"] = 29;}
      $startday = ((date("Y")+((date("Y")-1)/4)+6)%7);

      $language = "th";
      if($_POST["month"]=="มกราคม"){
        $inMonth = "jan";
      }
      elseif ($_POST["month"]=="กุมภาพันธ์"){
        $inMonth = "feb";
      }
      elseif ($_POST["month"]=="มีนาคม"){
        $inMonth = "mar";
      }
      elseif ($_POST["month"]=="เมษายน"){
        $inMonth = "apr";
      }
      elseif ($_POST["month"]=="พฤษภาคม"){
        $inMonth = "may";
      }
      elseif ($_POST["month"]=="มิถุนายน"){
        $inMonth = "jun";
      }
      elseif ($_POST["month"]=="กรกฏาคม"){
        $inMonth = "jul";
      }
      elseif ($_POST["month"]=="สิงหาคม"){
        $inMonth = "aug";
      }
      elseif ($_POST["month"]=="กันยายน"){
        $inMonth = "sep";
      }
      elseif ($_POST["month"]=="ตุลาคม"){
        $inMonth = "oct";
      }
      elseif ($_POST["month"]=="พฤศจิกายน"){
        $inMonth = "nov";
      }
      elseif ($_POST["month"]=="ธันวาคม"){
        $inMonth = "dec";
      }
      else{
        $inMonth = strtolower(substr($_POST["month"],0,3));
        $language = "en";
      }
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
        foreach ($week[$language] as $weekday) {
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
