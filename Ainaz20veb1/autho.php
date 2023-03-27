<?php
include("header.php");
?>
<div class="container flex-column-center">
    
<form id="form_autho" action="">
<div class="input-group"><label for="nomerTelephone">Введите номер телефона</label><input required id="nomerTelephone" name="nomerTelephone" type="text"></div>
<div class="input-group"><label for="parol">Введите пароль</label><input required id="parol" name="parol" type="password"></div>
<div class="input-group"><label for="parol_conf">Введите пароль</label><input required id="parol_conf" name="parol_conf" type="password"><span class="error_form" id="error_pass"></span></div>

<div class="input-group"><input type="submit" value="Добавить"></div>
</form>
</div>


<script>
    let confirm_pass = document.getElementById("parol_conf");
    let pass = document.getElementById("password");
    let form = document.getElementById("form_autho");

    // console.log(confirm_pass.value);
    form.addEventListener("submit", function(event){
     	if (confirm_pass.value!=pass.value){
     		event.preventDefault();
     		document.getElementById("error_pass").innerText = "Пароли не совпадают";
     		
     	}
     })

</script>
</body>
</html>