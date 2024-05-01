<?php

include ("conexion.php");

?>

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
						