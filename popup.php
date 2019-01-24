<script src="colorbox/jquery.min.js" ></script>
<link rel="stylesheet" href="colorbox/colorbox.css">
<script src="colorbox/jquery.colorbox.js"></script>

<script >

	$(document).ready(function(){
		$(".iframe").colorbox({
			iframe:true,
			width:"80%",
			height:"80%"
		});
	});

	function klikdong(){
		$.colorbox({
			iframe:true,
			width:"80%",
			height:"80%",
			href:"index.php"
		});
	};

</script>

<a href="index.php" class="iframe">klik disini 1</a> <br>
<a href="#" class="iframe">klik disini 2</a> <br>
<input type="submit" value="klik" onclick="klikdong()">
