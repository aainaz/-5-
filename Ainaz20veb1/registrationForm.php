<?php
include("header.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>

<div class="regg">
<form id="form_reg" action="/registration.php" method="POST" enctype="multipart/form-data">
	<div class="input-group"><label for="familia">Введите фамилию</label><input id="familia" type="text" name="familia"></div>
 		<div class="input-group"><label for="name">Введите имя</label><input id="name" type="text" name="name"></div>
 		<div class="input-group"><label for="otchestvo">Введите отчество</label><input id="otchestvo" type="text" name="otchestvo"></div>
 		<div class="input-group"><label for="datarozhd">Введите день рождения</label><input id="datarozhd" type="date" name="datarozhd"></div>
 		<div class="input-group"><label for="nomerTelephone">Введите номер телефона</label><input id="nomerTelephone" type="text" name="nomerTelephone"></div>
 		<div class="input-group"><label for="photo">Выберите фото</label><input id="photo" type="file" name="photo"></div>
 		<label for="#" style="margin: 5px;">Выберите пол</label>
 		<div class="input-group i-g-radio">
 			<label for="g-m">М</label><input id="g-m" value="М" type="radio" name="pol">
 			<label for="g-w">Ж</label><input id="g-w" value="Ж" type="radio" name="pol">
 		</div>
 		<div class="input-group"><label for="parol">Введите пароль</label><input id="parol" type="password" name="parol"></div>

 		<div class="input-group"><label for="parol_conf">Повторите пароль</label><input required id="parol_conf" name="parol_conf" type="password"><span class="error_form" id="error_pass"></span></div>
 		
 		<div class="input-group"><input type="submit" value="Добавить" ></div>
</form>
</div>
<script>
    let confirm_pass = document.getElementById("password_conf");
    let pass = document.getElementById("password");
    let form = document.getElementById("form_reg");

    // console.log(confirm_pass.value);
    form.addEventListener("submit", function(event){
     	if (confirm_pass.value!=pass.value){
     		event.preventDefault();
     		document.getElementById("error_pass").innerText = "Пароли не совпадают";
     		
     	}
     })

</script>