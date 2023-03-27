<?php
include("header.php");
$con = mysqli_connect("localhost", "root", "", "fitnessmukhametyanova");
$sql_query = ("select familia, name, otchestvo, nomerTelephone, parol, photo, dostizhenie from polzovatel where rol=3");
$result = mysqli_query($con, $sql_query);
?>
  <form action="">
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
              <div class="input-group"><label form=""></label><input type="text"></div>
            </form>
</body>
</html>
