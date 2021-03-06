<head>
	<title>Bracket</title>
	<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-87949-16');
	</script>
	<script>
		function clickedOn(idnum,childnum) {
			var was = document.getElementById("img"+childnum).src;
			document.getElementById("img"+childnum).src = document.getElementById("img"+idnum).src;
			if (was.substr(-9,9) != 'pixel.png') {
	    // switch it and all children too.
	    for (var i = childnum; i < 64; i++) {
	    	if (document.getElementById("img"+i).src == was) {
	    		document.getElementById("img"+i).src = document.getElementById("img"+idnum).src;
	    	}
	    }
	}
	var anyblanks = 0;
	var passer = '';
	passer = '';
	for (var i = 33; i < 64; i++) {
		if (document.getElementById("img"+i).src.substr(-9,9) == 'pixel.png') {
			anyblanks = 1;
		}
		var path = document.getElementById("img"+i).src.split("/");
		var img = path.pop();
		passer = passer + img.substring(0,img.length-4) + ':';
	}
	if (!anyblanks) {
//		document.getElementById("lock").href=passer;
document.getElementById("locktext").style="position:absolute;left:10px;top:10px;color:black;font-family:sans-serif;visibility:visible";
document.getElementById("clicktext").style="visibility:hidden;position:absolute";
window.scrollTo(0,0);
download();
//		console.log(passer);
}
}


function download(){
	document.getElementById('btnDownload').innerHTML = "Gerando imagem para download, aguarde";
	html2canvas(document.body).then(function(canvas) {
		var url = (canvas.toDataURL("image/png")+"").replace(/^data:image\/[^;]+/, 'data:application/octet-stream');
		document.getElementById('btnDownload').href = url;
		document.getElementById('btnDownload').innerHTML = "Clique aqui para baixar a imagem";
	});
}
</script>
</head><body>
	<b id="clicktext" style="position:absolute;left:10px;top:10px;color:black;font-family:sans-serif;visibility:visible">Escolha seus favoritos! </b>
	<!-- <a id="lock" style="position:absolute;left:30px;top:10px;color:black;font-family:sans-serif;visibility:hidden" href="javascript:void(0)"> -->
		<form method=get action="#" id=f onsubmit="return false();">
			<b id="locktext" style="position:absolute;left:30px;top:10px;color:black;font-family:sans-serif;visibility:hidden">
				Escolha seus favoritos!
				<a download="bracket.png" id="btnDownload" href="#">Gerando a imagem para download, aguarde</button>
				</b>
			</form>
			<div id="bracketContent">
				<img src="img/brackett.png" style="position:absolute;top:59px;left:0px;">
				<img src="img/bg.png" width="400" style="position:absolute;top:40px;left:820px">
				<a href="javascript:void(0)" onclick="clickedOn(1,33)"><img id="img1" src="img/1.png" width="120" height="28" style="position:absolute;top:45px;left:30px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(2,33)"><img id="img2" src="img/2.png" width="120" height="28" style="position:absolute;top:73px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(3,34)"><img id="img3" src="img/3.png" width="120" height="28" style="position:absolute;top:101px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(4,34)"><img id="img4" src="img/4.png" width="120" height="28" style="position:absolute;top:129px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(5,35)"><img id="img5" src="img/5.png" width="120" height="28" style="position:absolute;top:157px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(6,35)"><img id="img6" src="img/6.png" width="120" height="28" style="position:absolute;top:185px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(7,36)"><img id="img7" src="img/7.png" width="120" height="28" style="position:absolute;top:213px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(8,36)"><img id="img8" src="img/8.png" width="120" height="28" style="position:absolute;top:241px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(9,37)"><img id="img9" src="img/9.png" width="120" height="28" style="position:absolute;top:269px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(10,37)"><img id="img10" src="img/10.png" width="120" height="28" style="position:absolute;top:297px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(11,38)"><img id="img11" src="img/11.png" width="120" height="28" style="position:absolute;top:325px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(12,38)"><img id="img12" src="img/12.png" width="120" height="28" style="position:absolute;top:353px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(13,39)"><img id="img13" src="img/13.png" width="120" height="28" style="position:absolute;top:381px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(14,39)"><img id="img14" src="img/14.png" width="120" height="28" style="position:absolute;top:409px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(15,40)"><img id="img15" src="img/15.png" width="120" height="28" style="position:absolute;top:437px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(16,40)"><img id="img16" src="img/16.png" width="120" height="28" style="position:absolute;top:465px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(17,41)"><img id="img17" src="img/17.png" width="120" height="28" style="position:absolute;top:506px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(18,41)"><img id="img18" src="img/18.png" width="120" height="28" style="position:absolute;top:534px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(19,42)"><img id="img19" src="img/19.png" width="120" height="28" style="position:absolute;top:562px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(20,42)"><img id="img20" src="img/20.png" width="120" height="28" style="position:absolute;top:590px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(21,43)"><img id="img21" src="img/21.png" width="120" height="28" style="position:absolute;top:618px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(22,43)"><img id="img22" src="img/22.png" width="120" height="28" style="position:absolute;top:646px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(23,44)"><img id="img23" src="img/23.png" width="120" height="28" style="position:absolute;top:674px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(24,44)"><img id="img24" src="img/24.png" width="120" height="28" style="position:absolute;top:702px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(25,45)"><img id="img25" src="img/25.png" width="120" height="28" style="position:absolute;top:730px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(26,45)"><img id="img26" src="img/26.png" width="120" height="28" style="position:absolute;top:758px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(27,46)"><img id="img27" src="img/27.png" width="120" height="28" style="position:absolute;top:786px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(28,46)"><img id="img28" src="img/28.png" width="120" height="28" style="position:absolute;top:814px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(29,47)"><img id="img29" src="img/29.png" width="120" height="28" style="position:absolute;top:842px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(30,47)"><img id="img30" src="img/30.png" width="120" height="28" style="position:absolute;top:870px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(31,48)"><img id="img31" src="img/31.png" width="120" height="28" style="position:absolute;top:898px;left:30px">
				</a><a href="javascript:void(0)" onclick="clickedOn(32,48)"><img id="img32" src="img/32.png" width="120" height="28" style="position:absolute;top:926px;left:30px">
				</a>
				<a href="javascript:void(0)" onclick="clickedOn(33,49)"><img id="img33" src="img/pixel.png" width="120" height="42" style="position:absolute;top:40px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(34,49)"><img id="img34" src="img/pixel.png" width="120" height="42" style="position:absolute;top:96px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(35,50)"><img id="img35" src="img/pixel.png" width="120" height="42" style="position:absolute;top:152px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(36,50)"><img id="img36" src="img/pixel.png" width="120" height="42" style="position:absolute;top:208px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(37,51)"><img id="img37" src="img/pixel.png" width="120" height="42" style="position:absolute;top:264px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(38,51)"><img id="img38" src="img/pixel.png" width="120" height="42" style="position:absolute;top:320px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(39,52)"><img id="img39" src="img/pixel.png" width="120" height="42" style="position:absolute;top:376px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(40,52)"><img id="img40" src="img/pixel.png" width="120" height="42" style="position:absolute;top:432px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(41,53)"><img id="img41" src="img/pixel.png" width="120" height="42" style="position:absolute;top:501px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(42,53)"><img id="img42" src="img/pixel.png" width="120" height="42" style="position:absolute;top:557px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(43,54)"><img id="img43" src="img/pixel.png" width="120" height="42" style="position:absolute;top:613px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(44,54)"><img id="img44" src="img/pixel.png" width="120" height="42" style="position:absolute;top:669px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(45,55)"><img id="img45" src="img/pixel.png" width="120" height="42" style="position:absolute;top:725px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(46,55)"><img id="img46" src="img/pixel.png" width="120" height="42" style="position:absolute;top:781px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(47,56)"><img id="img47" src="img/pixel.png" width="120" height="42" style="position:absolute;top:837px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(48,56)"><img id="img48" src="img/pixel.png" width="120" height="42" style="position:absolute;top:893px;left:195px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(49,57)"><img id="img49" src="img/pixel.png" width="160" height="64" style="position:absolute;top:42px;left:360px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(50,57)"><img id="img50" src="img/pixel.png" width="160" height="64" style="position:absolute;top:154px;left:360px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(51,58)"><img id="img51" src="img/pixel.png" width="160" height="64" style="position:absolute;top:266px;left:360px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(52,58)"><img id="img52" src="img/pixel.png" width="160" height="64" style="position:absolute;top:378px;left:360px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(53,59)"><img id="img53" src="img/pixel.png" width="160" height="64" style="position:absolute;top:503px;left:360px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(54,59)"><img id="img54" src="img/pixel.png" width="160" height="64" style="position:absolute;top:615px;left:360px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(55,60)"><img id="img55" src="img/pixel.png" width="160" height="64" style="position:absolute;top:727px;left:360px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(56,60)"><img id="img56" src="img/pixel.png" width="160" height="64" style="position:absolute;top:839px;left:360px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(57,61)"><img id="img57" src="img/pixel.png" width="200" height="80" style="position:absolute;top:80px;left:575px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(58,61)"><img id="img58" src="img/pixel.png" width="200" height="80" style="position:absolute;top:304px;left:575px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(59,62)"><img id="img59" src="img/pixel.png" width="200" height="80" style="position:absolute;top:541px;left:575px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(60,62)"><img id="img60" src="img/pixel.png" width="200" height="80" style="position:absolute;top:765px;left:575px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(61,63)"><img id="img61" src="img/pixel.png" width="200" height="80" style="position:absolute;top:180px;left:806px"></a>
				<a href="javascript:void(0)" onclick="clickedOn(62,63)"><img id="img62" src="img/pixel.png" width="200" height="80" style="position:absolute;top:656px;left:806px"></a>
				<img id="img63" src="img/pixel.png" width="220" style="position:absolute;top:390px;left:1040px">

			</div>
		</body></html>