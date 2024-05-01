
<?php

	include("conexion.php");
?>

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
											<?php
												$sql = "SELECT * FROM objeto";
												$sql_query = mysqli_query($est, $sql);
												while($row = mysqli_fetch_assoc($sql_query)){
													$objeto = $row["detalle"];
													echo "<option>$objeto</option>";

												}
											
											?>
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
										<select class="select1">
											<?php
												$sql = "SELECT * FROM objeto_gasto";
												$sql_query = mysqli_query($est, $sql);
												while($row = mysqli_fetch_assoc($sql_query)){
													$objeto = $row["detalle"];
													echo "<option>$objeto</option>";

												}
											
											?>
										</select> 
									
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
						