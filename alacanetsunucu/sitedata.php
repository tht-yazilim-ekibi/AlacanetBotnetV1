<?php

	ob_start();
	session_start();
	
	
	$connect = mysqli_connect('localhost', 'u437836669_tht', 'b@P2XWyP^V', 'u437836669_tht');
	mysqli_set_charset($connect, 'utf8');
	
	function Output($json){
		header("Content-type: application/json; charset=utf-8");
		echo json_encode($json, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		exit();
	}
	
	

//SİTEBİLGİLERİ

$query = mysqli_query($connect, "SELECT * FROM site_data WHERE id = 1");
$fetch = mysqli_fetch_array($query);
$site_name = $fetch['site_name'];
$site_aciklama = $fetch['site_aciklama'];
$site_keyword = $fetch['site_keyword'];
$logo = $fetch['logo'];
$hakkimizda = $fetch['hakkimizda'];

$site_tel = $fetch['site_tel'];
$site_mail = $fetch['site_mail'];
$site_adres = $fetch['site_adres'];

$uygulama = $fetch['uygulama'];
$uygulamalink = $fetch['uygulamalink'];

//SİTE AYARLARI
$queryAyar = mysqli_query($connect, "SELECT * FROM data_settings WHERE id = 1");
$fetchAyar = mysqli_fetch_array($queryAyar);
$aktivasyonturu = $fetchAyar['aktivasyonturu'];
$mincekim = $fetchAyar['mincekim'];
$reforan = $fetchAyar['reforan'];
$whatsapbuton = $fetchAyar['whatsapbuton'];
$gorevonaysaat = $fetchAyar['gorevonaysaat'];

$siteanahtari = $fetchAyar['siteanahtari'];
$gizlianahtar = $fetchAyar['gizlianahtar'];

$uyegorev = $fetchAyar['uyegorev'];
$fiyat = $fetchAyar['fiyat'];
$minkap = $fetchAyar['minkap'];
$ibanad = $fetchAyar['iban'];

$canlidestek = $fetchAyar['canlidestek'];

$usercode = $fetchAyar['usercode'];
$userpass = $fetchAyar['userpass'];
$title = $fetchAyar['title'];


//email AYARLARI
$queryEmailS = mysqli_query($connect, "SELECT * FROM emailaktive WHERE id = 1");
$fetchEmailS = mysqli_fetch_array($queryEmailS);
$host = $fetchEmailS['host'];
$port = $fetchEmailS['port'];
$eusername = $fetchEmailS['username'];
$epassword = $fetchEmailS['password'];
//USER BİLGİLERİ
$userid = $_SESSION['userid'];
$queryUser = mysqli_query($connect, "SELECT * FROM data_users WHERE id = $userid");
$fetchUser = mysqli_fetch_array($queryUser);
$username = $fetchUser['username'];
$name = $fetchUser['name'];
$password = $fetchUser['password'];
$email = $fetchUser['email'];
$tel = $fetchUser['tel'];
$bakiye = $fetchUser['bakiye'];
$active = $fetchUser['active'];
$code = $fetchUser['code'];
//ÜYE GÖREV DURUMU
$sayOK = mysqli_query($connect, "SELECT * FROM yapilangorev WHERE userid = $userid && durum = 1");
$yazdirOK = mysqli_num_rows ($sayOK);

$sayNO = mysqli_query($connect, "SELECT * FROM yapilangorev WHERE userid = $userid && durum = 0");
$yazdirNO = mysqli_num_rows ($sayNO);



//WP BUTON

		  if($whatsapbuton == 1){
		   $btnWP = '
		     <li>
            <a href="https://api.whatsapp.com/send?phone=90'.$site_tel.'">
              <i class="fab fa-whatsapp"></i>
              <p>WhatsApp Destek</p>
            </a>
          </li>
		   ';  
		  }
		 
		 else{
			 $btnWP = '
		     <li>
            <a href="#">
               <i class="fas fa-globe-europe"></i>
              <p>'.$site_name.'</p>
            </a>
          </li>
		   ';   
		 }
		 
//GOREV BUTON
//WP BUTON

		  if($uyegorev == 1){
		   $btnGRV = '
		 
		  <li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown"><i class="far fa-plus-square"></i> Görev Ekleme(Yeni)</a>
<ul style="color:black" class="dropdown-menu">
<li><a href="uyegorev.php" style="color:black">Görev Ekle</a></li>
<li><a href="uyegorevdurum.php" style="color:black">Eklenen Görev Durumu</a></li>
<li><a href="bakiyeyukle.php" style="color:black">Bakiye Yükle</a></li>
</ul>
</li>
		   ';  
		  }
		 
		 else{
			 $btnGRV = '
		 
		   ';   
		 }


?>