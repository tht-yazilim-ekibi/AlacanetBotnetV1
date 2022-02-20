<?php
$dosya= "../vt.php";
    
    ob_start();
    
    if (file_exists($dosya))
    {
    header("Location:../index.php");
	exit();
	ob_end_flush();
}?>
<br><br><center><h1>Site Kurulum Sihirbazına Hoşgeldiniz</h1><br>
<h3>Lütfen kuruluma başlamadan önce bir mysql veritabanı oluşturunuz..</h3><br>

<form action="1.php" method="POST">

<h2>Sunucu adı</h2><input type="text" name="sunucuadi" placeholder="Ör:localhost"><br>
<h2>Mysql Kullanıcı Adı</h2><input type="text" name="kadi" placeholder="Ör:developer99"><br>
<h2>Mysql Şifreniz</h2><input type="password" name="sifre" placeholder="Ör:scx34.*65,2"><br>
<h2>Veritabanı Adınız</h2><input type="text" name="veritabani" placeholder="Ör:vt_name"><br>
<br>
<button type="submit"><h3>Gönder</h3></button>

</form>
</center>