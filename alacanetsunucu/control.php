
<html>
<head>
<?php
include("vt.php");
	$cekilen_id=htmlspecialchars(strip_tags(addslashes(stripslashes($_GET["id"]))));
	
		$sorgu = $db->prepare("SELECT * FROM kurban WHERE macadres=:id");				
		$sorgu->execute(array(':id'=>$cekilen_id));
		if($sorgu->rowCount()){
			$row=$sorgu->fetch(PDO::FETCH_ASSOC);

?>
<title><?php 
echo $row['komut'];
?></title>

<?php
		}
		?>
		
		<meta http-equiv="refresh" content="3;">
</head>
<body>

</body>
</html>