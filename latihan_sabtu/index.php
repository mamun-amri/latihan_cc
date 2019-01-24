<!DOCTYPE html>
<html>
<head>
	<title>javascript</title>
	<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
	<script language="javascript">
		
		function plus(parameter) {
			// ==== AJAX ====
			var input1 = $("#input1").val();
				input2 = $("#input2").val();

			if(parameter==1){ jumlah = eval(input1) + eval(input2); }
			if(parameter==2){ jumlah = eval(input1) - eval(input2); }
			if(parameter==3){ jumlah = eval(input1) / eval(input2); }
			if(parameter==4){ jumlah = eval(input1) * eval(input2); }
			// AJAX
			$("#hasil").val(jumlah);
		}
		
		function hitung() {
			var input1 = $("#input1").val();
				input2 = $("#input2").val();
				// rumus penjumlahan
				jumlah = eval(input1) + eval(input2);
				// js
				// dokument.getElementById('#hasil');
				// ajax
				$("#hasil").val(jumlah);
		}
	</script>
</head>
<body>
	HASIL :  <input type="text" id="hasil" size="10" readonly> <br>
	input1 : <input type="text" id="input1" size="10" > <br>
	input2 : <input type="text" id="input2" size="10" onkeyup="hitung()"> <br>

	<input type="submit" value="+" onclick="plus(1)">
	<input type="submit" value="-" onclick="plus(2)">
	<input type="submit" value="/" onclick="plus(3)">
	<input type="submit" value="x" onclick="plus(4)">
</body>
</html>