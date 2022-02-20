<?php
include("vt.php");
ob_start();
session_start();//eğer id admin tarafından girilmediyse giriş sayfasına yönlendiriyoruz
			if(!isset($_SESSION["login"])){
  
  header("Location:index.php");
  }else{
			
$cekilen_id=htmlspecialchars(strip_tags(addslashes(stripslashes($_GET["id"]))));//tüm html kodlardan ayırıyoruz.


if (!is_numeric($cekilen_id)) {//burada gelen id nin sayı olup olmadığı test edildi
header("location:index.php");    
}else{
    

$sorgu = $db->prepare("SELECT * FROM kullanici WHERE id=:id");				//istenilen id deki veriyi çekme
$sorgu->execute(array(':id'=>$cekilen_id));
$row=$sorgu->fetch(PDO::FETCH_ASSOC);
$resim = $row['foto'];							//ilk olarak resim dosyasını sunucudan siliyoruz...
unlink('../src/img/urun/'.$resim);
//resim dosyası silindii...


$sil =$db->exec("DELETE FROM kullanici WHERE id=$cekilen_id");		//verimizi veritabanından siliyoruz
$db=null;
header("location:userler.php");
}
  
		ob_end_flush();
  }
?>