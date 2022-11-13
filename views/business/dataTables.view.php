<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Empresa</title>
	<link rel="shortcut icon" href="../img/imagen-card.jpg">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
	<link rel="stylesheet" href="../css/all.min.css">
	<link rel="stylesheet" href="../css/styles-landing-model-flexbox.css">
</head>

<body>
	<!-- Contenedor -->
	<div class="contenedor" id="contenedor">
		<!-- Navegador -->
		<nav>
			<div class="logo">
				<img src="../img/logo-empresa.png" alt="">
			</div>
			<div class="menu">
				<div class="m-home"><a href="../index.html#">Inicio</a></div>
				<div class="m-portafolio"><a href="../index.html#portafolio">Portafolio</a></div>
				<div class="m-nosotros"><a href="../index.html#nosotros">Nosotros</a></div>
				<div class="m-contactenos"><a href="../index.html#contactenos">Contáctenos</a></div>
			</div>
			<div class="ingreso">
				<div class="m-ingreso"><a href="login.html">Iniciar Sesión</a></div>
			</div>
		</nav>
		<div class="tope"></div>
		<div class="titulo">
			<h1>Filtros</h1>
		</div>
		<div class="migas color-gris-oscuro">
			<a href="../index.html#portafolio">Portafolio</a>
			<p> &nbsp / &nbsp</p>
			<a href="dataTables.html">Filtros</a>
		</div>
		<section class="data-tables">
			<h3 class="subtitulo">Plugin para Filtros con JS: DataTables</h3>
			<div class="table-data-tables">
				<table id="table-data-tables" class="display nowrap" style="width:100%">
					<thead>
						<tr>
							<th>Id</th>
							<th>Rol</th>
							<th>Apellidos</th>
							<th>Nombres</th>
							<th>Nº Documento</th>
							<th>Correo</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>ADM-123</td>
							<td>Admin</td>
							<td>Ramos V.</td>
							<td>E. Albeiro</td>
							<td>1000987654</td>
							<td>profealbeiro2020@gmail.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>CLT-456</td>
							<td>Cliente</td>
							<td>Godines Salazar</td>
							<td>Rosa María</td>
							<td>1001565465</td>
							<td>rosa@cliente.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>EMP-789</td>
							<td>Empleado</td>
							<td>Carranza Rincón</td>
							<td>Victor Rogelio</td>
							<td>1005987896</td>
							<td>victor@empleado.com</td>
							<td>Retirado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>EST-1234</td>
							<td>Estudiante</td>
							<td>Perez</td>
							<td>Pepito</td>
							<td>1101325355</td>
							<td>pepito@estudiante.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>PRF-568</td>
							<td>Profesor</td>
							<td>Paternina Soto</td>
							<td>José</td>
							<td>7354256</td>
							<td>jose@profesor.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>PRV-896</td>
							<td>Proveedor</td>
							<td>Auxiliadora</td>
							<td>María</td>
							<td>4035923</td>
							<td>maria@proveedor.com</td>
							<td>Retirado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>CNT-689</td>
							<td>Contable</td>
							<td>González Espinosa</td>
							<td>Heidy Sofía</td>
							<td>10078968921</td>
							<td>sofia@contable.com</td>
							<td>Retirado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>RCT-852</td>
							<td>Rector</td>
							<td>Perea Sigún</td>
							<td>Amaranta</td>
							<td>98546213</td>
							<td>amaranta@rector.com</td>
							<td>Retirado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>RHM-133</td>
							<td>Recursos Humanos</td>
							<td>Arriaga Beltrán</td>
							<td>Camila </td>
							<td>1000564683</td>
							<td>camila@rrhh.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>ADM-123</td>
							<td>Admin</td>
							<td>Ramos V.</td>
							<td>E. Albeiro</td>
							<td>1000987654</td>
							<td>profealbeiro2020@gmail.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>CLT-456</td>
							<td>Cliente</td>
							<td>Godines Salazar</td>
							<td>Rosa María</td>
							<td>1001565465</td>
							<td>rosa@cliente.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>EMP-789</td>
							<td>Empleado</td>
							<td>Carranza Rincón</td>
							<td>Victor Rogelio</td>
							<td>1005987896</td>
							<td>victor@empleado.com</td>
							<td>Retirado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>EST-1234</td>
							<td>Estudiante</td>
							<td>Perez</td>
							<td>Pepito</td>
							<td>1101325355</td>
							<td>pepito@estudiante.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>PRF-568</td>
							<td>Profesor</td>
							<td>Paternina Soto</td>
							<td>José</td>
							<td>7354256</td>
							<td>jose@profesor.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>PRV-896</td>
							<td>Proveedor</td>
							<td>Auxiliadora</td>
							<td>María</td>
							<td>4035923</td>
							<td>maria@proveedor.com</td>
							<td>Retirado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>CNT-689</td>
							<td>Contable</td>
							<td>González Espinosa</td>
							<td>Heidy Sofía</td>
							<td>10078968921</td>
							<td>sofia@contable.com</td>
							<td>Retirado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>RCT-852</td>
							<td>Rector</td>
							<td>Perea Sigún</td>
							<td>Amaranta</td>
							<td>98546213</td>
							<td>amaranta@rector.com</td>
							<td>Retirado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>RHM-133</td>
							<td>Recursos Humanos</td>
							<td>Arriaga Beltrán</td>
							<td>Camila </td>
							<td>1000564683</td>
							<td>camila@rrhh.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>ADM-123</td>
							<td>Admin</td>
							<td>Ramos V.</td>
							<td>E. Albeiro</td>
							<td>1000987654</td>
							<td>profealbeiro2020@gmail.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>CLT-456</td>
							<td>Cliente</td>
							<td>Godines Salazar</td>
							<td>Rosa María</td>
							<td>1001565465</td>
							<td>rosa@cliente.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>EMP-789</td>
							<td>Empleado</td>
							<td>Carranza Rincón</td>
							<td>Victor Rogelio</td>
							<td>1005987896</td>
							<td>victor@empleado.com</td>
							<td>Retirado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>EST-1234</td>
							<td>Estudiante</td>
							<td>Perez</td>
							<td>Pepito</td>
							<td>1101325355</td>
							<td>pepito@estudiante.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>PRF-568</td>
							<td>Profesor</td>
							<td>Paternina Soto</td>
							<td>José</td>
							<td>7354256</td>
							<td>jose@profesor.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>PRV-896</td>
							<td>Proveedor</td>
							<td>Auxiliadora</td>
							<td>María</td>
							<td>4035923</td>
							<td>maria@proveedor.com</td>
							<td>Retirado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>CNT-689</td>
							<td>Contable</td>
							<td>González Espinosa</td>
							<td>Heidy Sofía</td>
							<td>10078968921</td>
							<td>sofia@contable.com</td>
							<td>Retirado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>RCT-852</td>
							<td>Rector</td>
							<td>Perea Sigún</td>
							<td>Amaranta</td>
							<td>98546213</td>
							<td>amaranta@rector.com</td>
							<td>Retirado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
						<tr>
							<td>RHM-133</td>
							<td>Recursos Humanos</td>
							<td>Arriaga Beltrán</td>
							<td>Camila </td>
							<td>1000564683</td>
							<td>camila@rrhh.com</td>
							<td>Activado</td>
							<td class="tabla-acciones">
								<a class="tabla-edit" href="#"><i class="fas fa-edit"></i></a>
								<a class="tabla-delete" href="#"><i class="fas fa-trash-alt"></i></a>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Id</th>
							<th>Rol</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Nº Documento</th>
							<th>Correo</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</section>
		<!-- Pie de página -->
		<footer>
			<div class="parrafo">
				<p>Todos los Derechos Reservados a:</p>
				<p>Instructor E. Albeiro Ramos V. © 2022</p>
				<p>earamos42@misena.edu.co / profealbeiro2020@gmail.com</p>
			</div>
		</footer>
	</div>
	<script src="../js/sweetalert.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
	<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
	<script src="../js/scripts.js"></script>
</body>

</html>