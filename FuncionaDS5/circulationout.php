<?php
require_once 'conexion.php';
include ('cnx_estudiantes.php');
include ('CSS/style2.css');
$user = $_SESSION ['username'];
?>

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