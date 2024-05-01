<?php

include ('conexion.php');

?>

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
											<?php 
												$sql = "SELECT * FROM meses";
												$sqlquery = mysqli_query($est, $sql);
												
												while($rows = mysqli_fetch_assoc($sqlquery)){
												$mes = $rows['nombre_mes'];
												echo "<option>$mes</option>";

												}
											?>
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