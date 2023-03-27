<?php
$con = mysqli_connect("localhost", "root", "", "fitnessmukhametyanova");

 if ($_FILES && $_FILES["photo"]["error"]== UPLOAD_ERR_OK)
        {
            $name1 = "img/". $_FILES["photo"]["name"];
            $name2 = $_FILES["photo"]["name"];
            move_uploaded_file($_FILES["photo"]["tmp_name"], $name1);
            echo "Файл загружен";
        }

if(!empty($_POST)){

    $surname = $_POST["familia"];
    $name = $_POST["name"];
    $patronymic = !empty($_POST["otchestvo"]) ? $_POST["otchestvo"] : "null";
    $phone =  $_POST["nomerTelephone"];
    $pass = $_POST["parol"];
    $birthday = $_POST["datarozhd"];
    $photo = "photo";
    $gender = $_POST["pol"];
    $created_at = date("Y-m-d H:i:s");
    $awards = !empty($_POST["dostizhenie"]) ? $_POST["dostizhenie"] : "-";

    $query = "insert into polzovatel(id_polzovatel,familia,name,otchestvo,nomerTelephone,parol,datarozhd,photo,pol,rol,datesozdania,dostizhenie) values(null,'$surname','$name','$patronymic','$phone','$pass','$birthday','$photo','$gender','3','$created_at','$awards')";
    
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('Запись добавлена успешно!');location.href='/';</script>";
    }
    else{
        echo "<script>alert('Ошибка добавления! Попробуйте снова.')</script>";
        echo mysqli_error($con);
         echo "<br>",$query;
    }
}
?>