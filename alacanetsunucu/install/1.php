<?php
$dosya= "../vt.php";
    
    ob_start();
    
    if (file_exists($dosya))
    {
    header("Location:../index.php");
	exit();
	ob_end_flush();
}
ob_start();
	$sunucuadi=$_POST["sunucuadi"];
	$kullaniciadi=$_POST["kadi"];
	$sifre=$_POST["sifre"];
	$veritabaniadi=$_POST["veritabani"];
	
	$dsn = "mysql:host=".$sunucuadi.";dbname=".$veritabaniadi.";charset=utf8mb4";//veritabanı adını girin
$user = $kullaniciadi;//kullanıcı adını girin
$passwd = $sifre;//şifreyi adını girin

$db = new PDO($dsn, $user, $passwd);

$db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);

if($db){
	?>
	<br><center><h1>Veritabanı Bağlantısı Başarılı</h1><br>


<form action="2.php" method="POST">

<input type="hidden" name="sunucuadi" value="<?php echo $sunucuadi;?>"><br>
<input type="hidden" name="kadi" value="<?php echo $kullaniciadi;?>"><br>
<input type="hidden" name="sifre" value="<?php echo $sifre;?>"><br>
<input type="hidden" name="veritabani" value="<?php echo $veritabaniadi;?>"><br>
<h2>Admin paneli için istediğiniz kullanıcı adını yazınız.</h2><br><input type="text" name="adminkadi"><br>
<h2>Şifrenizi Yazınız</h2><input type="password" name="adminsifre"><br>
<br>
<button type="submit"><h3>Gönder</h3></button>

</form>
</center>
	
<?php	
}else{
	echo 'Veritabanı bağlantısı yapılamadı lütfen bilgilerinizi kontrol ediniz.';
}
ob_end_flush();
?>