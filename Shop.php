<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="#" method="post">
      Enter name/ID product : <input type="text" name="input" value="">
      <input type="submit" value="Submit">
    </form>
    <?php
    if($_POST){
      $product = array(
        "T0001"=>"บล็อคหยอดหมีพูห์",
        "T0004"=>"ตุ๊กตากบ สอน ABC",
        "T0005"=>"โต๊ะกิจกรรม",
        "P0001"=>"กระดานลื่นสุขสันต์",
        "B0001"=>"หนังสือมีเสียง: Pooh's Musical"
      );
      $input = $_POST["input"];
      echo "<table border=\"1\">";
      foreach ($product as $id => $name) {
        if($input == $id){
          echo "<tr><td>รหัสสินค้า</td><td>ชื่อสินค้า</td></tr>";
          echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$name</td>";
          echo "</tr>";
        }
        if($input == $name){
          echo "<tr><td>ชื่อสินค้า</td><td>รหัสสินค้า</td></tr>";
          echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$id</td>";
          echo "</tr>";
        }
      }
      echo "</table>";
    }
    ?>
  </body>
</html>
