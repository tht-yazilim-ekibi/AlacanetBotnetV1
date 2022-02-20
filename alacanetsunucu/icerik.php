<?php
  
  include("header.php");
  ?>
  


  <br><br>

<form action="icerikkontrol.php" method="POST">
<?php

	$id = '1';
	
		$sorgu = $db->prepare("SELECT * FROM genel WHERE id=:id");				//istenilen id deki veriyi çekme
		$sorgu->execute(array(':id'=>$id));
		if($sorgu->rowCount()){
			$row=$sorgu->fetch(PDO::FETCH_ASSOC);

?>
    <fieldset class="bilgi">
      <label>Saldırılacak sitenin urlsini giriniz.
        <input type="text" value="<?php echo $row['url'];?>" name="url">
      </label>
      <label>
        <select name="baslat" id="text">
		<option name="baslat" selected="selected" value="<?php if($row['baslat']==0){echo 0;}else{echo 1;}?>"><?php if($row['baslat']==0){echo 'Dur';}else{echo'Saldır';}?></option>
			<option name="baslat" value="0">Dur</option>
			<option name="baslat" value="1">Saldır</option>
		</select>
      </label>
    </fieldset>
    <button type="submit">Ekle</button>
  </form>

		<?php
		}
		?>

</center><br><br> <b><b> 
<div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1920" height="870"></canvas></div> <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>--> <script type="text/javascript">$.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function(){ particlesJS('particles-js', { "particles": { "number": { "value": 80, "density": { "enable": true, "value_area": 800 } }, "color": { "value": "#ffffff" }, "shape": { "type": "circle", "stroke": { "width": 0, "color": "#000000" }, "polygon": { "nb_sides": 5 }, "image": { "width": 100, "height": 100 } }, "opacity": { "value": 0.5, "random": false, "anim": { "enable": false, "speed": 1, "opacity_min": 0.1, "sync": false } }, "size": { "value": 5, "random": true, "anim": { "enable": false, "speed": 40, "size_min": 0.1, "sync": false } }, "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1 }, "move": { "enable": true, "speed": 6, "direction": "none", "random": false, "straight": false, "out_mode": "out", "attract": { "enable": false, "rotateX": 600, "rotateY": 1200 } } }, "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": true, "mode": "repulse" }, "onclick": { "enable": true, "mode": "push" }, "resize": true }, "modes": { "grab": { "distance": 400, "line_linked": { "opacity": 1 } }, "bubble": { "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3 }, "repulse": { "distance": 200 }, "push": { "particles_nb": 4 }, "remove": { "particles_nb": 2 } } }, "retina_detect": true, "config_demo": { "hide_card": false, "background_color": "#b61924", "background_image": "", "background_position": "50% 50%", "background_repeat": "no-repeat", "background_size": "cover" } } );}); </script> <script> // This script and many more from// http://rainbow.arch.scriptmania.comif (document.getElementById){// Plenty of black gives a better sparkle effect.showerCol=new Array('#000000','#ff0000','#ffffff','#000000','#00ff00','#ff00ff','#ffffff','#ffa500','#000000','#fff000');launchCol=new Array('#ffff00','#ff00ff','#00ffff','#ffffff','#ff8000');runSpeed=70; //setTimeout speed.// *** DO NOT EDIT BELOW ***var yPos=200;var xPos=200;var explosionSize=200;var launchColour='#ffff80';var timer=null;var dims=8;var evn=360/14;firework=new Array();var ieType=(typeof window.innerWidth != 'number');var ieRef=((ieType) && (document.compatMode) && (document.compatMode.indexOf("CSS") != -1))?document.documentElement:document.body;thisStep=0;step=5;for (i=0; i < 14; i++){document.write(' <div id="sparks'+i+'" style="position:absolute;top:0px;left:0px;border-radius:50%;height:'+dims+'px;width:'+dims+';font-size:'+dims+';background-color:'+launchColour+'"> &lt;\/div&gt;'); firework=document.getElementById(&quot;sparks&quot;+i).style; } function winDims(){ winH=(ieType)?ieRef.clientHeight:window.innerHeight; winW=(ieType)?ieRef.clientWidth:window.innerWidth; bestFit=(winW &gt;= winH)?winH:winW; } winDims(); window.onresize=new Function(&quot;winDims()&quot;); function Reset(){ var dsy=(ieType)?ieRef.scrollTop:window.pageYOffset; thisStep=-1; launchColour = launchCol[Math.floor(Math.random()*launchCol.length)]; explosionSize=Math.round(100+Math.random()*(bestFit/4)); yPos = explosionSize+Math.round(Math.random()*(winH-(explosionSize*2.2)))+dsy; xPos = explosionSize+Math.round(Math.random()*(winW-(explosionSize*2.2))); for (i=0; i &lt; 14; i++){ firework.backgroundColor=launchColour; firework.width=dims+&quot;px&quot;; firework.height=dims+&quot;px&quot;; firework.fontSize=dims+&quot;px&quot;; } Fireworks(); } function Fireworks(){ thisStep+=step; timer=setTimeout(&quot;Fireworks()&quot;,runSpeed); for (i=0; i &lt; 14; i++){ firework.top = yPos + explosionSize * Math.sin(i*evn*Math.PI/180)*Math.sin(thisStep/100)+&quot;px&quot;; firework.left= xPos + explosionSize * Math.cos(i*evn*Math.PI/180)*Math.sin(thisStep/100)+&quot;px&quot;; if (thisStep &gt; 100){ var dims_change=(explosionSize &lt; 150)?dims:Math.round(dims+Math.random()*2); firework.backgroundColor=showerCol[Math.floor(Math.random()*showerCol.length)]; firework.width=dims_change+&quot;px&quot;; firework.height=dims_change+&quot;px&quot;; firework.fontSize=dims_change+&quot;px&quot;; } } if (thisStep &gt; 140){ clearTimeout(timer); Reset(); } } window.onload=Fireworks; } </div> </script></b></b><div align="center" class="a"><font color="white"></font></div><font color="white"><br><div align="center"></div><br> </font>



</body></html>
<?php

	ob_end_flush();

?>