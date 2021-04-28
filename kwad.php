<?php
	if(isset($_GET['n'])){
		if(intval($_GET['n']))
			$x = intval($_GET['n']);
		else
			$wynik = "Błąd danych!";
		if(isset($x)){
			$wynik = "";
			$p = 1;
			for(;$x>0;$x--){
				$wynik .= $p."^2=".strval($p**2)."<br>";
				$p++;
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tik</title>
	<script src="./funkcje.js"></script>
	<link rel="stylesheet" href="main.css?">
</head>
<body>
	<div id="page">
		<div id="baner">
			<a href="index.html"><img src="baner.jpg" alt="baner"></a>
		</div>
		<div id="lewo">
			<h2>Menu</h2>
			<ul>
				<li><a href="temp.html">Temperatura</a></li>
				<li><a href="kwad.php">Kwadraty</a></li>
			</ul>
		</div>
		<div id="prawo">
			<form action="#" method="get">
				<input id='temp' name=n><br>
				<input type="submit" value="Kwadraty">
				<p id='Wynik'><?php if(isset($wynik)) echo $wynik; ?></p>
			</form>
		</div>
		<div id="empty"></div>
		<footer>
			<p style="text-align: center;">
				<script type="text/javascript">
					czas();
				</script>
			</p>
		</footer>
	</div>
</body>
</html>