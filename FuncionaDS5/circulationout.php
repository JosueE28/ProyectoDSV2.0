<?php

include ("conexion.php");

?>

<div id="screen3" class="contenedor3">
						
							<div class="text-anulacion">
							
									<label><a>Sacar cheques de circulacion</a></label>

							
							</div>
							<div class="subcontenedor-anulacion">
							
								<div class="subcontenedor-anulacion1">
									<div class="subcontenedor-anulacion1text">
										<div class="text-anulacion01"><label>No Cheque</label></div>
										<input type="text" id="input_cheque1">
										<button type="button" onclick="mensaje1()">Buscar</button>
									</div>
									<div class="subcontenedor-anulacion1Fecha" id="datosCheque2">
										
									</div>
								</div>
								
								<div class="subcontenedor-anulacion2">
									<label>Fecha/Banco</label>
									<input type="date" id="inputanulacion2" name="anulacionF">
									<div class="button1" id="boton_anular">
									<button type="button" onclick="anular1()">Sacar de circulacion</button>
									</div>
								</div>
						
							</div>
						</div> 
						<script>
	function mensaje1(){
		
		let dato4 =document.getElementById('input_cheque1').value;
		
		var parametro = {
			"name":dato4 
		}
		$.ajax({
			data: parametro,
			url:('select2.php'),
			type:'POST',
			
			beforeSend: function(){
				console.log()

			},
			success: function(mensaje_mostrar){
				$('#datosCheque2').html(mensaje_mostrar);
			}


		});
		
	}

	function anular1(){
		let fecha1 = document.getElementById('inputanulacion1').value;
		let dato2 =document.getElementById('input_cheque1').value;
		const mensaje_mostrar = 0;
		console.log(fecha1);
		var parametro2 = {
			"fecha": fecha1,
			"name1": dato2,
			"mensaje_mostrar": mensaje_mostrar
		}

		$.ajax({
			data:parametro2,
			url: ('anular2.php'),
			type: 'POST',

			success: function(mensaje_mostrar){
				console.log(mensaje_mostrar);
				if(mensaje_mostrar==1){
					alert('anulado');
			}else{
				alert('No anulado');
			}
		}

			

		});

	}

	</script>