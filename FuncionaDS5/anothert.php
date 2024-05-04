<?php

include ("conexion.php");

?>

<div id="screen4" class="contenedor4">
						<form method="POST" id="form2">
							<div class="contenedor4-title">
								
								<label>Otras transaciones - Depositos, Ajustes y Notas (Db / Cr)</label>
							
							</div>
							<div class="subcontenedor4">
							
								<div class="subcontenedor4-1">
								
									<label>Fecha</label>
									<input type="date" id="fecha_otros">
								
								</div>
								<div class="subcontenedor4-2">
									<label>Transaccion</label>
									
									<select id="select_otros">
									
										<option class="negrita" disabled>Libro</option>
										<option value="1" selected>  +Depositos</option>
										<option value="2">  +Notas Crédito</option>
										<option value="3">  +Ajutes al libro</option>
										<option value="4">  -Notas Débito</option>
										<option value="5">  -Ajutes al libro</option>
										<option class="negrita" disabled>Banco</option>
										<option value="6">  +Depositos en Transito</option>
										<option value="7">  -Ajustes al banco</option>
										<option class="negrita" disabled>Transferencias</option>
										<option value="8">  +Transferencia</option>
										<option value="9">  -Transferencia-Apoyo Extraordinario</option>
				
									</select>
								
									
									<label>Monto</label>
									<input type="text" id="monto_otros">
									<div class="contenedor4-button">
									<button type="button" onclick="otros()">Grabar</button>
									<button type="button" id="boton_otro">Nuevo</button>
									</div>
								</div>
								<div class="subcontenedor4-3">
								
								
								</div>
								
							
							</div>
		
						</div> 
					</form>
						<script>

							function otros(){

								let fecha_otro = document.getElementById('fecha_otros').value;
								let select_otros = document.getElementById('select_otros').value;
								let monto_otro = document.getElementById('monto_otros').value;
								const mensaje = 0;
								
								var parametros_otros = {
									'fecha':fecha_otro,
									'select':select_otros,
									'monto': monto_otro
								}

								$.ajax({
									data: parametros_otros,
									type:'POST',
									url:('otros_insertar.php'),


									success: function(mensaje){
										if(mensaje>0){
											alert('Perfecto')
									}else{
										alert('Algo salió mal')
									}
									


								}
								})

							}

							$(document).ready(function(){
						$("#boton_otro").click(function (){
							var datos = $('#form2').serialize();
							$.ajax({
								type: "POST",
								url: "insertar.php",
								data: datos,
								success: function(response){
									
									$('#fecha_otros').val('');
									$('#select_otros').val('');
									$('#monto_otros').val('');
									$('#input2').val('');
									$('#campo5').val('');
									$('#campo6').val('');

									
									if (response == '1') {
										
									} else {
									}
								},
								
							});
						});
					});



						</script>