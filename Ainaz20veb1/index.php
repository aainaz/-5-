 <?php
include("header.php");

$con = mysqli_connect("localhost", "root", "", "fitnessmukhametyanova");
$sql_query = ("select familia, name, otchestvo, nomerTelephone, parol, photo, dostizhenie from polzovatel where rol=3");
$result = mysqli_query($con, $sql_query);

?>
     <div class="cards">
        <?php 
        while($trener = mysqli_fetch_assoc($result)){
            ?>
            <div class="card">
                <div class="img_container"> <img src="./img/<?=$trener["photo"];?>"></div>
                <h2><?=$trener["familia"]." ".$trener["name"]." ".$trener["otchestvo"];?> </h2>
                <p><?=$trener["nomerTelephone"];?></p>
                <p><?=$trener["dostizhenie"];?></p>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>