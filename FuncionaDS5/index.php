<!DOCTYPE html>
<html lang="en">
	
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Banco</title>
		<link rel="stylesheet" href="CSS/style2.css?v=<?php echo time() ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

		
		
	</head>
	
	
<body>
		
		<header class="header">
		
		<div class="logo-bar">
			<img  id="img1" src="Imagenes/fox.png" >
		</div>
		
		
			<nav class="nav">
				<div class="navbar">
					<ul>
						<li data-href="#" onclick="mostrarPantalla(event,'screen0')"><a >Inicio</a></li>
						<li data-href="#" onclick="mostrarPantalla(event, 'screen1')"><a >Cheque</a></li>
						<li>
							<a href="#">Operaciones Cks</a>
							<div class="dropdown">
								<ul>
									<li data-href="#" onclick="mostrarPantalla(event,'screen2')"><a >Anulacion</a></li>
									<li data-href="#" onclick="mostrarPantalla(event,'screen3')"><a>Sacar de circulacion</a></li>
								</ul>
							</div>
						</li>
						<li data-href="#" onclick="mostrarPantalla(event,'screen4')"><a >Otras transaciones</a></li>
						<li data-href="#" onclick="mostrarPantalla(event,'screen5')"><a>Conciliación</a></li>
						<li><a href="#">Reportes</a></li>
						<div class="icono"><img src="Imagenes/moon.png" id="icon"></div>
					</ul>
				</div>
				
			</nav>
		</header>

			<section>
						<div class="pantalla0" id="screen0">
						<img id="img1"  src="imagenes/fox.png"  >
						</div>
						
						<!--Este es el form 1(cheque)-->
						<?php include("cheque.php"); ?>
						
						<!--Este es el form 2 anulacion-->
						<?php include("anulación.php");?>
						<!--Este es el form 3 anulacion-->
						
						<?php include("circulationout.php");?>
						<!--Esta es la pantalla 4-->
						<?php include("anothert.php");?>
						
						<!--Este es el contenedor 5-->
						<?php include("conciliation.php");?>
						
			</section>
		
	</body>
	<script> /*src="Javascript/script.js"*/
	
	let pantallaActualId = localStorage.getItem('pantallaActualId') || '';

function mostrarPantalla(event, id) {
    if (pantallaActualId) {
        const pantallaActual = document.getElementById(pantallaActualId);
        pantallaActual.style.display = 'none';
        if (pantallaActualId === 'screen0') {
            const imagenScreen0 = pantallaActual.querySelector('img');
            imagenScreen0.style.display = 'flex';
        }
    }

    const pantallaMostrar = document.getElementById(id);
    pantallaMostrar.style.display = 'flex';

    pantallaActualId = id;
    localStorage.setItem('pantallaActualId', id);
}

function cambiarPantalla(id) {
    const pantallaMostrar = document.getElementById(id);
    pantallaMostrar.style.display = 'flex';

    if (pantallaActualId) {
        const pantallaActual = document.getElementById(pantallaActualId);
        pantallaActual.style.display = 'none';
    }

    pantallaActualId = id;
    localStorage.setItem('pantallaActualId', id);
}
		
	var icon = document.getElementById('icon');
	icon.onclick = function(){
		document.body.classList.toggle("dark");
		if(document.body.classList.contains("dark")){
			icon.src = "Imagenes/sun.png";
		}else{
			icon.src = "Imagenes/moon.png";
		}
	}
	</script>


</html>