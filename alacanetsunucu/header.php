<?php
	include("vt.php");
  ob_start();
  session_start();
  if(!isset($_SESSION["login"])){
  
  header("Location:./index.php");
  }
?> 
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="icon" href="ico.ico" type="image/x-icon" />
<link rel="stylesheet" crossorigin="anonymous" href="./Hacked - by &#39;Captainkanka_files/main.css"><script type="text/javascript" src="./Hacked - by &#39;Captainkanka_files/howler.min.js.indir"></script>

<title>Admin Panel-BOTNET</title>






 <meta name="viewport" content="width=device-width, initial-scale=1"> <script type="text/javascript" src="./Hacked - by &#39;Captainkanka_files/howler.min.js.indir"></script> <link rel="stylesheet" type="text/css" href="./Hacked - by &#39;Captainkanka_files/bootstrap.css"> <link rel="stylesheet" type="text/css" href="./Hacked - by &#39;Captainkanka_files/bootstrap.min.css"> <link rel="stylesheet" type="text/css" href="./Hacked - by &#39;Captainkanka_files/style.css"> <link rel="stylesheet" href="./Hacked - by &#39;Captainkanka_files/bootstrap.min(1).css"> <link href="./Hacked - by &#39;Captainkanka_files/css" rel="stylesheet" type="text/css"> <script type="text/javascript" src="./Hacked - by &#39;Captainkanka_files/bootstrap.min.js.indir"></script>
 <script type="text/javascript" src="./Hacked - by &#39;Captainkanka_files/jquery.js.indir"></script> 
 <script type="text/javascript" src="./Hacked - by &#39;Captainkanka_files/jquery-1.10.2.min.js.download"></script> 
 <script src="./Hacked - by &#39;Captainkanka_files/jquery.min.js.indir"></script> 
 <script src="./Hacked - by &#39;Captainkanka_files/bootstrap.min.js(1).indir"></script>
 <style type="text/css"> @import url('https://fonts.googleapis.com/css?family=Nunito');@import url('https://fonts.googleapis.com/css?family=Poiret+One');body, html {height: 100%;background-repeat: no-repeat; /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/background:black;position: relative;}#particles-js{ width: 100%; height: 100%; background-size: cover; background-position: 50% 50%; position: fixed; top: 0px; z-index:1;}h1{font:1.5em Cinzel,serif;font-weight:400;letter-spacing:.35em;text-shadow:0 0 25px rgba(254,254,255,.85);width:70%} } footer { margin: 20%; }
#a {
onmousedown:stop;
animation-name: rotate ;
animation-duration: 5s;
animation-play-state: running;
animation-timing-function: linear;
animation-iteration-count: infinite;
opacity: 1.0;filter: alpha(opacity=50);} img:hover {opacity: 1.0;filter: alpha(opacity=100);}
@keyframes rotate{
10% {transform:rotateY(36deg)}
20% {transform:rotateY(72deg)}
30% {transform:rotateY(108deg)}
40% {transform:rotateY(144deg)}
50% {transform:rotateY(180deg)}
60% {transform:rotateY(216deg)}
70% {transform:rotateY(252deg)}
80% {transform:rotateY(288deg)}
90% {transform:rotateY(324deg)}
100% {transform:rotateY(360deg)}
}


    *,
    *:before,
    *:after {
       box-sizing: border-box;
    }
    form {
      border: 1px solid #c6c7cc;
      border-radius: 5px;
      font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
      overflow: hidden;
      width: 240px;
	  position:relative;
	  z-index:1000;
    }
    fieldset {
      border: 0;
      margin: 0;
      padding: 0;
    }
    input {
      border-radius: 5px;
      font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
      margin: 0;
    }
    .bilgi {
      padding: 20px 20px 0 20px;
    }
    .bilgi label {
      color: #395870;
      display: block;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .bilgi input {
      background: #fff;
      border: 1px solid #c6c7cc;
       box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1);
      color: #636466;
      padding: 6px;
      margin-top: 6px;
      width: 100%;
    }
    .islem {
      background: #f0f0f2;
      border-top: 1px solid #c6c7cc;
      padding: 20px;
    }
    .islem .btn {
      background: linear-gradient(#49708f, #293f50);
      border: 0;
      color: #fff;
      cursor: pointer;
      font-weight: bold;
      float: left;
      padding: 8px 16px;
    }
    .islem label {
      color: #7c7c80;
      font-size: 12px;
      float: left;
      margin: 10px 0 0 20px;
    }
    
    


</style>

<style type="text/css">
nav {
	margin: 27px auto 0;
	z-index:1100000;
	position: relative;
	width: 550px;
	height: 50px;
	background-color: #34495e;
	
	font-size: 0;
}
nav a {
	line-height: auto;
	height: 100%;z-index:1100000;
	font-size: 15px;
	display: inline-block;
	position: relative;
	z-index: 1;
	text-decoration: none;
	text-transform: uppercase;
	text-align: center;
	color: white;
	cursor: pointer;
}
nav .animation {
	position: absolute;
	height: 100%;
	top: 0;
	z-index: 0;
	transition: all .5s ease 0s;
}
a:nth-child(1) {
	width: 100px;z-index:1100000;
}
a:nth-child(2) {
	width: 110px;z-index:1100000;
}
a:nth-child(3) {
	width: 100px;z-index:1100000;
}
a:nth-child(4) {
	width: 160px;z-index:1100000;
}
a:nth-child(5) {
	width: 120px;z-index:1100000;
}
nav .start-home, a:nth-child(1):hover~.animation {
	width: 100px;
	left: 0;
	background-color: #1abc9c;
}
nav .start-about, a:nth-child(2):hover~.animation {
	width: 110px;
	left: 130px;
	background-color: #e74c3c;
}
nav .start-blog, a:nth-child(3):hover~.animation {
	width: 100px;
	left: 240px;
	background-color: #3498db;
}
nav .start-portefolio, a:nth-child(4):hover~.animation {
	width: 160px;
	left: 310px;
	background-color: #9b59b6;
}
nav .start-contact, a:nth-child(5):hover~.animation {
	width: 120px;
	left: 470px;
	background-color: #e67e22;
}
 

h1 {
	text-align: center;z-index:1100000;
	margin: 40px 0 40px;
	text-align: center;
	font-size: 30px;
	color: #ecf0f1;
	text-shadow: 2px 2px 4px #000000;
	font-family: 'Cherry Swash', cursive;
}
 
p {
    position: absolute;z-index:1100000;
    bottom: 20px;
    width: 100%;
    text-align: center;
    color: #ecf0f1;
    font-family: 'Cherry Swash',cursive;
    font-size: 16px;
}
 
span {
    color: #2BD6B4;z-index:1100000;
}
</style>
</head> <body><center>
<body>
<br><img src="logo.gif" style="width:210px;height:200px;" alt="Windows Firewall"><br>
<nav>
        <a href="./icerik.php">Anasayfa</a>
        <a href="./userler.php">Adminler</a>
        <a href="./kurbanlar.php">Bilgisayar Listesi</a>
        <a href="./logout.php">Çıkış</a>
        
    </nav>






