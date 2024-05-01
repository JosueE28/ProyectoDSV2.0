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
					
					
					<div id="screen1" class="contenedor-creacion">
					
						<div class="text-creacion">
						
							<label><a>Creacion</a></label>
						
						</div>
						<div class="salvacion">
							<div class="contenedor-cheques">
								<div class="text-cheques">
							
									<label><a>Cheques</a></label>
							
								</div>
									
									<div class="sub-contenedor1No">
										<div class="text-No">
										<label id="label1"> No. cheque</label>
										<label>Monto</label>
										</div>
										<div class="input-No">
											<input type="text">
											<input type="date" >
										</div>
								
									</div>
								
									<div class="sub-contenedor2Paguese">
										<label>Páguese a la orden de</label>
										<select class="select1">
										<option>Servicios no personales</option>
										<option>Materiales de suministro</option>
										<option>Maquinaria y equipo</option>
										</select> 
							
									</div>
									
									<div class="sub-contenedor3Lasuma">
										<label>La suma de</label>
										<input type="text" id="input1">
										<input type="text" id="input2">
							
									</div>
									
									<div class="sub-contenedor4Detalle">
								
										<label>Detalle</label>
										<input type="text">
							
									</div>
									
							</div>
							<div class="contenedor-OG">
								<div class="text-cheques">
							
									<label><a>Objetos de gastos</a></label>
							
								</div>
								<div class="sub-contenedor2Monto">
									<div class="sub-Objeto">
									
										<label>Objeto</label>
										<input type="text">
									
									</div>
									<div class="sub-Monto">
									
										<label>Monto</label>
										<input type="text">
									
									</div>
									
							
								</div>
							
					
							</div>
						  </div>
							<div class="footer1">
							
								<button>Guardar</button>
								<button>Nuevo</button>
							
							</div>
						</div>
						
						
						<!--Este es el form 2 anulacion-->
						<div id="screen2" class="contenedor-anulacion">
						
							<div class="text-anulacion">
							
									<label><a>Anulacion de Cheques</a></label>

							
							</div>
							<div class="subcontenedor-anulacion">
							
								<div class="subcontenedor-anulacion1">
									<div class="subcontenedor-anulacion1text">
										<div class="text-anulacion01"><label>No Cheque</label></div>
										<input type="text">
										<button>Buscar</button>
									</div>
									<div class="subcontenedor-anulacion1Fecha">
										<label>Fecha</label>
										<input type="date" id="input-Fecha">
										<label>Paguese a la orden</label>
										<input type="text" disabled>
										<label>La suma de</label>
										<input type="text" id="input-Suma" disabled>
										<label>Descripcion de gasto</label>
										<input type="text" disabled>
									</div>
								</div>
								
								<div class="subcontenedor-anulacion2">
									<label>Fecha de anulacion</label>
									<input type="date" id="input-anulacion1">
									<label>Detalle de anulacion</label>
									<input type="text" id="input-anulacion2">
									<div class="button1">
									<button>Anular</button>
									</div>
								</div>
						
							</div>
						</div>
						<!--Este es el form 3 anulacion-->
						
						<div id="screen3" class="contenedor3">
						
							<div class="text-anulacion">
							
									<label><a>Sacar cheques de circulacion</a></label>

							
							</div>
							<div class="subcontenedor-anulacion">
							
								<div class="subcontenedor-anulacion1">
									<div class="subcontenedor-anulacion1text">
										<div class="text-anulacion01"><label>No Cheque</label></div>
										<input type="text">
										<button>Buscar</button>
									</div>
									<div class="subcontenedor-anulacion1Fecha">
										<label>Fecha</label>
										<input type="date" id="input-Fecha">
										<label>Paguese a la orden</label>
										<input type="text">
										<label>La suma de</label>
										<input type="text" id="input-Suma">
										<label>Descripcion de gasto</label>
										<input type="text">
									</div>
								</div>
								
								<div class="subcontenedor-anulacion2">
									<label>Fecha/Banco</label>
									<input type="date" id="input-anulacion1">
									<div class="button1">
									<button>Sacar de circulacion</button>
									</div>
								</div>
						
							</div>
						</div> 
						<!--Esta es la pantalla 4-->
						<div id="screen4" class="contenedor4">
						
							<div class="contenedor4-title">
								
								<label>Otras transaciones - Depositos, Ajustes y Notas (Db / Cr)</label>
							
							</div>
							<div class="subcontenedor4">
							
								<div class="subcontenedor4-1">
								
									<label>Fecha</label>
									<input type="date">
								
								</div>
								<div class="subcontenedor4-2">
									<label>Transaccion</label>
									
									<select>
									
										<option class="negrita">Libro</option>
										<option>  +Depositos</option>
										<option>  +Notas Crédito</option>
										<option>  +Ajutes al libro</option>
										<option>  -Notas Débito</option>
										<option>  -Ajutes al libro</option>
										<option class="negrita">Banco</option>
										<option>  +Depositos en Transito</option>
										<option>  -Ajustes al banco</option>
										<option class="negrita">Transferencias</option>
										<option>  +Transferencia</option>
										<option>  -Transferencia-Apoyo Extraordinario</option>
				
									</select>
								
									
									<label>Monto</label>
									<input type="text">
									<div class="contenedor4-button">
									<button>Grabar</button>
									<button>Nuevo</button>
									</div>
								</div>
								<div class="subcontenedor4-3">
								
								
								</div>
								
							
							</div>
		
						</div> 
						
						
						<!--Este es el contenedor 5-->
						<div id="screen5" class="contenedor5">
						
							<div class="contenedor5-title">
							
								<label>Conciliacion Banco</label>
							
							</div>
						
						
							<div class="subcontenedor5">
		
								<div class="subcontenedor5-1">
								
									<div class="subcontenedor5-11">
									
										<label class="Titulo1">Saldo segun el libro al</label>
										<label class="Titulo2">MAX. Depósito</label>
										<label class="Titulo3">Cheques Anulados</label>
										<label class="Titulo3">Notas de Credito</label>
										<label class="Titulo3">Ajustes</label>
										<label class="Titulo1">SUBTOTAL</label>
										<label class="Titulo2">Menos cheques girados en el mes</label>
										<label class="Titulo3">Notas de Débitos</label>
										<label class="Titulo3">Ajustes</label>
										<label class="Titulo1" id="titulo1e">Saldo conciliado según libros al</label>
									
									</div>
									<div class="subcontenedor5-12">
										<label>Mes:</label>
										<select class="select2">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										</select> 
									</div>
									<div class="subcontenedor5-13">
										<div class="subcontenedor5-131">
											<label>Año</label>
											<select class="select2">
											<option>2020</option>
											<option>2021</option>
											<option>2022</option>
											<option>2023</option>
											<option>2024</option>
											</select>
											<input type="text" class="inputespacio1">
											<input type="text">
											<input type="text">
											<input type="text">
											<input type="text">
											<label class="inputespacio1"><a>Subtotal</a></label>
											<input type="text">
											<input type="text">
											<input type="text">
											<label class="inputespacio1"><a>Subtotal</a></label>
										</div>
										<div class="subcontenedor5-132">
										
										
										<button>Realizar Conciliación</button>
										<input class="inputespacio2" type="text">
										<input type="text">
										<input  id="inputespacio3" type="text">
										<input type="text">
										<input type="text">
										</div>
										
										
									</div>
									<div class="subcontenedor5-14"></div>
								
								</div>
								<div class="subcontenedor5-2">
									<div class="subcontenedor5-21">
									
										<label class="Titulo2p">Saldo En Al Banco:</label>
										<label class="Titulo3p">Mas: Depósitos en Tránsito</label>
										<label class="Titulo3p">Menos: Cheques en circulacion</label>
										<label class="Titulo3p">Mas: Ajustes</label>
										<label class="Titulo2p" id="Titulo2e">Saldo conciliado igual al banco</label>
									
									</div>
									<div class="subcontenedor5-22">
											
											<input type="text">
											<input type="text">
											<input type="text">
											<label class="inputespacio1"><a>Subtotal</a></label>
											
											
										</div>
									<div class="subcontenedor5-23">
									
											<input type="text" id="input3">
											<input type="text">
											<input type="text">
									
									</div>
										
								
								</div>
								<div class="subcontenedor5-3">
									<button>Grabar</button>
									<button>Nuevo</button>
								</div>
											
							</div>
							
						</div>

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