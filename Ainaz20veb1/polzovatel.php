<?php 	
include("header.php");
$con = mysqli_connect("localhost", "root", "", "fitnessmukhametyanova");
$sql_query = ("select id_polzovatel, familia, name, otchestvo, nomerTelephone, parol, photo, dostizhenie from polzovatel where rol=3");
 $result = mysqli_query($con,$sql_query);
 ?>

 <div class="cards">
 	<?php 	
 		while($user = mysqli_fetch_array($result)){
 			?>
 			    <div class="card">
 			    	<div class="img_container">
 			    		<img src="/img/<?=$user['photo'];?>" alt="<?=$user['name'];?>">
 			    	</div>
    
 			    	<h2><?=$user['familia']." ".$user['name'];?></h2>
 			    	<p><?=$user['nomerTelephone'];?></p>
 			    	<p><?=$user['dostizhenie'];?></p>
 			    	
    
 			    </div>
 			<?php
 		}
 	?>

 </div>
 </body>
</html>