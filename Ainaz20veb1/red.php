  <?php
  
  include("header.php");
  $con = mysqli_connect("localhost", "root", "", "fitnessmukhametyanova");
  $sql_query = ("select id_polzovatel, familia, name, otchestvo, nomerTelephone, parol, photo, dostizhenie from polzovatel where rol=3");
   $result = mysqli_query($con,$sql_query); //выполняет sql запрос к базе данных
       
        $first_id = mysqli_fetch_array(mysqli_query($con, "select id_polzovatel from polzovatel where rol=3 limit 1")); //передаёт полученные данные в массив

        $trener_id = !empty($_GET['trener'])?$_GET['trener']:$first_id["id_polzovatel"];
        
        $trener_info = mysqli_fetch_array(mysqli_query($con,"select * from polzovatel where id_polzovatel=$trener_id"));
            
        ?>
        <!DOCTYPE html>

    <div class="flex-column-center">
      <div class="list-trainer">
           <?php
                  while($trener = mysqli_fetch_array($result)){
           
           ?>
           <div class="trener-item">
            <p class="p1"><?=$trener['familia']. " " . $trener["name"]. " " . $trener["otchestvo"]?></p>
            <p>
              <a class ="p1" href="?trener=<?=$trener['id_polzovatel'];?>"> <button class="btn btn-edit">Редактировать</button>
              </a>
              <a class ="p1" href="/del.php?trener=<?=$trener['id_polzovatel'];?>">
              <button class="btn btn-delete">Удалить</button>
              </a>
            </p>
           </div>
           <?php
                  }
                  ?>
    </div>
      
  
  <div>
 
  <h1>Редактирование информации</h1>
    <form action="" method="POST" class="form1">
              <div  class="input-group"><label for="">Фамилия</label><input value="<?=$trener_info["familia"]; ?>" required name="familia" type="text" ></div>
              <div  class="input-group"><label for="">Имя</label><input value="<?=$trener_info["name"]; ?>"  required name="name" type="text" id="name"></div>
              <div class="input-group"><label for="">Отчество</label><input value="<?=$trener_info["otchestvo"]; ?>" name="otchestvo" type="text" id="otchestvo"></div>
              <div class="input-group"><label for="">Телефон</label><input value="<?=$trener_info["nomerTelephone"]; ?>" required name="nomerTelephone" type="text" id="nomerTelephone"></div>
              <div class="input-group"><label for="">Пароль</label><input value="<?=$trener_info["parol"]; ?>" required name="parol" type="text" id="parol"></div>
              <div class="input-group"><label for="">Дата рождения</label><input   required name="datarozhd" value="<?=$trener_info["datarozhd"]; ?>" type="date" id="datarozhd" ></div>
              <div class="input-group"><label for="">Фото</label><input value="<?=$trener_info["photo"]; ?>" name="photo"  type="file" id="photo"></div>
              <label for="#" style="margin:5px;">Выберите пол</label>
              <div class="input-group i-g-radio">
                <label for="g-m">М</label><input name="gender" id="g-m" type="radio"  value= "М" <?=($trener_info["pol"]=="М")?"checked":"";?>>
                    <label for="g-w">
                <label for="g-w">Ж</label><input name="gender" id="g-w" type="radio" value="Ж" <?=($trener_info["pol"]=="Ж")?"checked":"";?>>
            </div>
             
              <div class="input-group"><label for="">Награды</label><input value="<?=$trener_info["dostizhenie"]; ?>" name="dostizhenie" type="text" id="dostizhenie"></div>
              <div class="input-group"><input type="submit" value="редактировать"></div>
            </form>
        </div>
        </div>
</body>
</html>

<?php

$con = mysqli_connect("localhost", "root", "", "fitnessmukhametyanova");
 
if(!empty($_FILES["photo"]["tmp_name"])){
  $name1= "photo/" . $_FILES["photo"]["name"];
  $name2= $_FILES["photo"]["name"];
  $trener_id=$_POST['id_trener'];
  $query="update polzovatel Set photo='$name2' where polzovatel.id_polzovatel=$trener_id"  ;
  $result_photo= mysqli_query($conn, $query);
  if($result_photo)
  {
          move_uploaded_file($_FILES["photo"]["tmp_name"], $name1);
  }
}

if(!empty($_POST)) { 

$surname = $_POST["familia"];
$name = $_POST["name"];
$patronymic = !empty($_POST["otchestvo"]) ? $_POST["otchestvo"] : "null"; 
$birthday = $_POST["datarozhd"];
$phone =  $_POST["nomerTelephone"];
$gender = $_POST["pol"];
$photo = "photo";
$pass = $_POST["parol"];
$awards = !empty($_POST["dostizhenie"]) ? $_POST["dostizhenie"] : "-";



$query = "UPDATE polzovatel SET familia = '$surname', name = '$name', otchestvo = '$patronymic',
 nomerTelephone = '$phone', parol = '$pass', datarozhd = '$birthday', dostizhenie = '$awards' WHERE id_polzovatel = '$trener_id'";

$result1=mysqli_query($con,$query);
print_r($result1);

if($result1) {
    echo "<script>alert('запись редактированна'); location.href='/';</script>";
} else {
    echo "<script>alert('Ошибка добавление')</script>";
    echo mysqli_error($con);
    echo "<br>",$query;
}
}
?>