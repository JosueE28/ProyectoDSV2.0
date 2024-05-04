
<?php

	include("conexion.php");
?>


				
				<div id="screen1" class="contenedor-creacion">
				<form method="POST" id="form1" >	
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
										<label>Fecha</label>
										</div>
										<div class="input-No">
											<input type="text" id="campo1" name="Nocheque">
											<input type="date" id="campo2" name="fecha" >
										</div>
								
									</div>
								
									<div class="sub-contenedor2Paguese">
										<label>Páguese a la orden de</label>
										<select class="select1" name="select1">
											<?php
												$sql = "SELECT * FROM proveedores";
												$sql_query = mysqli_query($est, $sql);
												while($row = mysqli_fetch_assoc($sql_query)){
													$nombre = $row["nombre"];
													$codigo = $row["codigo"];
													echo "<option value='$codigo' selected>$nombre</option>";

												}
											?>
										</select> 
							
									</div>
									
									<div class="sub-contenedor3Lasuma">
										<label>La suma de</label>
										<input type="text" id="input1" name="lasuma" placeholder="Escribe un número" oninput="convertirNumeroALetras()">
										<input type="text" id="input2" readonly>
							
									</div>
									
									<div class="sub-contenedor4Detalle">
								
										<label>Detalle</label>
										<input type="text" id="campo5" name="descripcion">
							
									</div>
									
							</div>
							<div class="contenedor-OG">
								<div class="text-cheques">
							
									<label><a>Objetos de gastos</a></label>
							
								</div>
								<div class="sub-contenedor2Monto">
									<div class="sub-Objeto">
									
										<label>Objeto</label>
										<select class="select1" name="select2">
											<?php
												$sql = "SELECT * FROM objeto_gasto";
												$sql_query = mysqli_query($est, $sql);
												while($row = mysqli_fetch_assoc($sql_query)){
													$detalle = $row["detalle"];
													$codigo2 = $row["codigo"];
													echo "<option value='$codigo2' selected>$detalle</option>";

												}
											
											?>
										</select> 
									
									</div>
									<div class="sub-Monto">
									
										<label>Monto</label>
										<input type="text" id="campo6" name="monto">
									
									</div>
									
							
								</div>
							
					
							</div>
						  </div>
							<div class="footer1" id="foot">
							
								<button type="button" name="boton1" id="buttone">Guardar</button>
								<button type="button" id="buttonn" name="boton2">Nuevo</button>
							
							</div>
						</div>
					</form>
						
						<script>

					  $(document).ready(function(){

					  
						$("#buttone").click(function(){
							var datos1 = $('#form1').serialize();
							
							$.ajax({
								data: datos1,
								url:('insertar.php'),
								type:'POST',
								success: function(r){
									if(r==1){
										
									}else{
										
									}

								}

							})
							return false;
						});
					});
							
					$(document).ready(function(){
						$("#buttonn").click(function (){
							var datos = $('#form1').serialize();
							$.ajax({
								type: "POST",
								url: "insertar.php",
								data: datos,
								success: function(response){
									
									$('#campo1').val('');
									$('#campo2').val('');
									$('#input1').val('');
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
					
			function numeroALetras(numero) {
            var unidades = ['cero', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'];
            var decenas = ['', 'diez', 'veinte', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa'];
            var centenas = ['', 'ciento', 'doscientos', 'trescientos', 'cuatrocientos', 'quinientos', 'seiscientos', 'setecientos', 'ochocientos', 'novecientos'];

            if (numero < 10) {
                return unidades[numero];
				
            } 
			else if (numero === 10) {
				return 'diez';
			}
			
			else if (numero < 20) {
                return 'dieci' + unidades[numero - 10];
            } else if (numero < 100) {
                return decenas[Math.floor(numero / 10)] + ((numero % 10 != 0) ? ' y ' + unidades[numero % 10] : '');
            } else if (numero === 100) {
                return 'cien';
            } else if (numero < 1000) {
                return centenas[Math.floor(numero / 100)] + ((numero % 100 != 0) ? ' ' + numeroALetras(numero % 100) : '');
            } else if (numero < 10000) {
                var miles = Math.floor(numero / 1000);
                var resto = numero % 1000;
                return (miles > 1 ? numeroALetras(miles) + ' mil' : 'mil') + (resto != 0 ? ' ' + numeroALetras(resto) : '');
            } else {
                return 'Número no soportado';
            }
        }




					
		function convertirNumeroALetras() {
            var inputNumero = document.getElementById('input1').value;
            var inputResultado = document.getElementById('input2');

            if (inputNumero.trim() === '') {
                inputResultado.value = 'Ingrese un número válido.';
            } else {
                var numero = parseInt(inputNumero, 10);
                if (!isNaN(numero)) {
                    inputResultado.value = numeroALetras(numero);
                } else {
                    inputResultado.value = 'Ingrese un número válido.';
                }
            }
        }
        document.getElementById('input1').addEventListener('input', convertirNumeroALetras);
					</script>