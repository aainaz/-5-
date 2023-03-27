<?php
include("header.php");
$con = mysqli_connect("localhost", "root", "", "fitnessmukhametyanova");
$sql_query = ("select familia, name, otchestvo, nomerTelephone, parol, photo, dostizhenie from polzovatel where rol=3");
$result = mysqli_query($con, $sql_query);
?>

<div class="container">
    <h2>Добавление тренера</h2>
    <form action="/addTrenerDB.php" method="POST">
        <div class="input-group"><label for="familia">Введите фамилию</label><input required id="familia" name="familia" type="text"></div>
        <div class="input-group"><label for="name">Введите имя</label><input required id="name" name="name" type="text"></div>
        <div class="input-group"><label for="otchestvo">Введите отчество</label><input id="otchestvo" name="otchestvo" type="text"></div>
        <div class="input-group"><label for="datarozhd">Введите дату рождения</label><input required id="datarozhd" name="datarozhd" type="date"></div>
        <div class="input-group"><label for="nomerTelephone">Введите номер телефона</label><input required id="nomerTelephone" name="nomerTelephone" type="text"></div>
        <div class="input-group"><label for="photo">Выберите фото</label><input id="photo" name="photo" type="file"></div>
        <label for="#" style="margin:5px;">Выберите пол</label>
        <div class="input-group i-g-radio">
            <label for="g-m">М</label><input id="g-m" name="pol" type="radio" value="M" checked>
            <label for="g-w">Ж</label><input id="g-w" name="pol" type="radio" value="W">
        </div>
        <div class="input-group"><label for="parol">Введите пароль</label><input required id="parol" name="parol" type="password"></div>
        <div class="input-group"><label for="dostizhenie">Введите награды</label><input  id="dostizhenie" name="dostizhenie" type="text"></div>
        <div class="input-group"><input type="submit" value="Добавить"></div>
    </form> 
</div>

</body>
</html>

