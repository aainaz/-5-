<?php 
$con = mysqli_connect("localhost", "root", "", "fitnessmukhametyanova");

if (!empty($_FILES["photo"]["tmp_name"])) { 
		$tmp_name = $_FILES['photo']['tmp_name'];
		$photo_name = $_FILES['photo']['name'];	
		$name2 = 'img/'	. $_FILES["photo"]["name"];
		move_uploaded_file($tmp_name, $name2);

	if (!empty($_POST)){
		$name = $_POST['name'];
		$surname = $_POST['familia'];
		$patronymic = $_POST['otchestvo'];
		$birthday = $_POST['datarozhd'];
		$phone = $_POST['nomerTelephone'];
		$photo = $photo_name;
		$gender = $_POST['pol'];
		$pass = $_POST['parol'];
		$created_at = date('y-m-d h:i:s');

        $query = "insert into polzovatel(id_polzovatel,familia,name,otchestvo,nomerTelephone,parol,datarozhd,photo,pol,rol,datesozdania) values(null,'$surname','$name','$patronymic','$phone','$pass','$birthday','$photo','$gender','3','$created_at')";
		$result = mysqli_query($con, $query);

		if ($result) {
		echo  "<script>
					alert('Регистрация прошла успешно');
					location.href='/polzovatel.php';
				</script>";	
		}
		else{
			echo " <script>
						alert('ошибка');
					</script>";
			echo mysqli_error($con);
			echo $query;
		}
	}
}
 ?>