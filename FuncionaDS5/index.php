<!DOCTYPE html>
<html lang="en">
	
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Banco</title>
		<link rel="stylesheet" href="CSS/style2.css?v=<?php echo time() ?>">
		

		
		
	</head>
	
	
<body>
		
		<header class="header">
		
		<div class="logo-bar">
			<img  src="Imagenes/fox.png" >
		</div>
		
		
			<nav class="nav">
				<div class="navbar">
					<ul>
						<li href="#" onclick="mostrarPantalla(event,'screen0')"><a >Inicio</a></li>
						<li href="#" onclick="mostrarPantalla(event, 'screen1')"><a >Cheque</a></li>
						<li>
							<a href="#">Operaciones Cks</a>
							<div class="dropdown">
								<ul>
									<li href="#" onclick="mostrarPantalla(event,'screen2')"><a >Anulacion</a></li>
									<li href="#" onclick="mostrarPantalla(event,'screen3')"><a>Sacar de circulacion</a></li>
								</ul>
							</div>
						</li>
						<li href="#" onclick="mostrarPantalla(event,'screen4')"><a >Otras transaciones</a></li>
						<li href="#" onclick="mostrarPantalla(event,'screen5')"><a>Conciliación</a></li>
						<li><a href="#">Reportes</a></li>
					</ul>
				</div>
			</nav>
		</header>

			<section>
						<div id="screen0">
						<img  src="imagenes/fox.png"  >
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
	let pantallaActualId = '';

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
    event.preventDefault();
}

		
	</script>

</html>