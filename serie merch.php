<!DOCTYPE html>
<html lang="en">
<head>

	<title>Series</title>

	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles/css3.css">

	<section id="title">
		<div id='div9'>
			<h1>13 REASONS WHY</h1>
		</div>
		
		<p id="hola"><?php include ('myphp.php'); ?></p>
	</section>

	<div id="menu">
		<div id="colm1">
               <button  class="button" onclick="location.href='serie.php'" type="button">Description</button>
           </div>
            <div id="colm1">
               <button  class="button" onclick="location.href='serie_seasons.php'" type="button">Seasons</button>
           </div>
            <div id="colm1">
               <button  class="button" onclick="location.href='serie actors.php'" type="button">Actors</button>
           </div>
           <div id="colm1">
               <button  class="button" onclick="location.href='serie_videos.php'" type="button">Videos</button>
           </div>
           <div id="colm1">
               <button  class="button" onclick="location.href='serie merch.php'" type="button">Merchandising</button>
           </div>
           <div id="colm1">
               <button  class="button" onclick="location.href='serie_link.php'" type="button">Related Links</button>
           </div>
           <div id="div5">
           	<input id="casilla" type="text" value='0' name="nombre">
           	<img id="carrito" src="images/carrito.png">
           	<button id="Buy" type="button" onclick="buy()">Buy now!</button>
           </div>
	</div>

	<script type="text/javascript">
		let sum = 0;
		function Sumar1() {
			sum = parseInt(sum) + parseInt(20);
			document.getElementById('casilla').value = sum;
		}
		function Sumar2() {
			sum = parseInt(sum) + parseInt(35);
			document.getElementById('casilla').value = sum;
		}
		function Sumar3() {
			sum = parseInt(sum) + parseInt(12);
			document.getElementById('casilla').value = sum;
		}

		function buy() {
			  var mensaje;
    			var opcion = confirm("Your transaction is " + sum + "$. Do you want to pay for it?");
    			if (opcion == true) {
        			alert("Transaction succesfull!");
				} else {
	    			alert("Transaction cancelled!")
				}
				document.getElementById("ejemplo").innerHTML = mensaje;
		}
	</script>

</head>

<body>

	<div id="div1">
		<h2>
			Merchandising:
		</h2>
		<div class="div2">
			
			<img class="images" src="images/camiseta.jpg">
			<h4 class="h4">Black T-shirt</h4>
			<button id="button1" onclick="Sumar1()" type="button">20$ </button>

		</div>

		<div class="div2">
			
			<img class="images" src="images/sudadera.jpg">
			<h4 class="h4">Hoodie</h4>
			<button id="button2" onclick="Sumar2()" type="button">35$ </button>

		</div>

		<div class="div2">
			
			<img class="images" src="images/taza.jpg">
			<h4 class="h4">Cup</h4>
			<button id="button3" onclick="Sumar3()" type="button">12$ </button>

		</div>
	</div>
	


</body>

<footer>Copyright© 2020 Xabi Iturrioz, Mikel Martin y Asís Caballero</footer>