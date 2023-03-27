<?php
$con = mysqli_connect("localhost", "root", "", "fitnessmukhametyanova");
$trener_id = !empty($_GET['trener'])?$_GET['trener']:1;
$trener_info = mysqli_fetch_array(mysqli_query($con,"select * from polzovatel where id_polzovatel=$trener_id"));
$query="DELETE from polzovatel where id_polzovatel = '$trener_id'";

$result=mysqli_query($con,$query);

if($result) {
echo "<script>alert('запись удалена'); location.href='/';</script>";
} else {
echo "<script>alert('Ошибка удаление')</script>";
echo mysqli_error($con);
echo "<br>",$query;
}


?>