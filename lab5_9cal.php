<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name = $_POST["name"];
      $nickname = $_POST["nickname"];
      $bday = $_POST["bday"];
      $mail = $_POST["mail"];
      $tel = $_POST["tel"];
      $garder = $_POST["garder"];
      $academy = $_POST["academy"];

      $pos = strpos($name,' ');
      if($pos != null){
        $lastname = substr($name,$pos,strlen($name));
        $name = substr($name,0,$pos);
      }

      echo "ชื่อ สกุล(ชื่อเล่น) $name";
      if($pos != null) echo " $lastname";
      echo " ($nickname)<br>";
      echo "วันเดือบปีเกิด $bday<br>";
      echo "e-mail $mail<br>";
      if(strlen($tel) == 10){
        echo "หมายเลขโทรศัพท์ $tel<br>";
      }
      else {
        echo "หมายเลขโทรศัพท์ผิดพลาด<br>";
      }
      echo "เพศ $garder<br>";
      echo "สถานศึกษา $academy<br>";
    ?>
  </body>
</html>
