<?php
	include("conexion.php");
?>





<div id="screen2" class="contenedor-anulacion">
	<form method="POST" id="form1">
		<div class="text-anulacion">
			<label><a>Anulacion de Cheques</a></label>
		</div>
		<div class="subcontenedor-anulacion">
			<div class="subcontenedor-anulacion1">
				<div class="subcontenedor-anulacion1text">
					<div class="text-anulacion01"><label>No Cheque</label></div>
					<input name="NoCheque" type="text" id="input_cheque">
					<button type="button" id="boton3" name="boton3" onclick="mensaje()">Buscar</button>
				</div>
				<div class="subcontenedor-anulacion1Fecha" id="datosCheque">
					<!-- Aquí se crearán dinámicamente los campos con la respuesta de AJAX -->
				</div>
			</div>
			<div class="subcontenedor-anulacion2" id="anular_id">
				<label>Fecha de anulacion</label>
				<input type="date" id="input-anulacion1" class="date1" >
				<label>Detalle de anulacion</label>
				<input type="text" id="input-anulacion2" class="date">
				<div class="button1">
					<button type="button" id="boton-anular" onclick="anular()">Anular</button>
				</div>
			</div>
		</div>
	</form>
</div>

<script>
	function mensaje(){
		
		let dato =document.getElementById('input_cheque').value;
		
		var parametro = {
			"name":dato 
		}
		$.ajax({
			data: parametro,
			url:('select.php'),
			type:'POST',
			
			beforeSend: function(){
				console.log()

			},
			success: function(mensaje_mostrar){
				$('#datosCheque').html(mensaje_mostrar);
			}


		});
		
	}


	function anular(){
		let fecha1 = document.getElementById('input-anulacion1').value;
		let dato2 =document.getElementById('input_cheque').value;
		let descripcion = document.getElementById('input-anulacion2').value;
		const mensaje_mostrar = 0;
		var parametro2 = {
			"fecha": fecha1,
			"detalles": descripcion,
			"name1": dato2,
			"mensaje_mostrar": mensaje_mostrar
		}

		$.ajax({
			data:parametro2,
			url: ('anular.php'),
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

