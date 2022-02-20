<?php

include("vt.php");

  ob_start();
  session_start();
  if(!isset($_SESSION["login"])){
  
  header("Location:./index.php");
  exit;
  }



	
	$baslat=$_POST['baslat'];
	$url=$_POST['url'];
	$cekilen_id=1;
	
		

					$guncelle = $db->prepare("UPDATE genel SET baslat=:baslat, url=:url WHERE id=:id");			
					$guncelle->execute([':id'=>$cekilen_id,':baslat'=>$baslat,':url'=>$url]);									
					
					if($guncelle){
						echo	"Veri Güncellendi Sayfayı yenileyiniz";
						header("Location:tamam.php");
						
						}else{echo'olmadı';}
		
	


ob_end_flush();
?>