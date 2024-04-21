<?php
$pagina = '';
if (isset($_GET['q']))
	$pagina = clear_string($_GET['q']);
switch ($pagina) {

		#### /// INICIA ARBOLADO
	case "arbolado/":
		include_once("arbolado/arbolado.php");
		break;

	case "arbolado/especies/":
		include_once('admin/user/includes/php/tablesorter.php');
		include_once("arbolado/arbolado_nombre.php");
		break;

	case "arbolado/especies/mostrar/":
		include_once('admin/user/includes/php/tablesorter.php');
		include_once("arbolado/arbolado_nombre_especifico.php");
		break;

	case "arbolado/areas-ubicacion/":
		include_once('admin/user/includes/php/tablesorter.php');
		include_once("arbolado/arbolado_areas_ubicacion.php");
		break;

	case "arbolado/areas-ubicacion/mostrar/":
		include_once('admin/user/includes/php/tablesorter.php');
		include_once("arbolado/arbolado_areas_ubicacion_especifico.php");
		break;

	case "arbolado/estado-fitosanitario/":
		include_once('admin/user/includes/php/tablesorter.php');
		include_once("arbolado/arbolado_estado_fitosanitario.php");
		break;

	case "arbolado/estado-fitosanitario/mostrar/":
		include_once('admin/user/includes/php/tablesorter.php');
		include_once("arbolado/arbolado_estado_fitosanitario_especifico.php");
		break;
		#### /// TERMINA ARBOLADO

		#### /// INICIA REPORTE DE ARBOLADO
	case "arbolado/informacion/": /// MUESTA LA INFORMACIÓN DEL ARBOL EN ESPECIFICO, PUEDE SER POR LECTURA DE QR
		include_once("arbolado/reportes/arbolado.php");
		break;

	case "arbolado/informacion/reporte/": /// LEVANTA UN REPORTE DE UN ARBOL
		include_once("arbolado/reportes/arbolado_reporte.php");
		break;

		#### /// TERMINA REPORTE DE ARBOLADO

		#### /// INICIA GALERIA DE IMAGENES
		case "arbolado/galeria/": /// MUESTA LA GALERIA DE IMAGENES
			include_once("galeria/galeria.php");
			break;
			#### /// TERMINA GALERIA DE IMAGENES
		
		#### /// INICIA MAPAS
	case "arbolado/mapa/": /// DESPLIEGA LOS MAPAS Y LOS MUESTRA EN UN DIV CON AJAX
		include_once("mapa/mapa.php");
		break;

		#### /// TERMINA MAPAS

		#### /// PLAGAS
	case "plagas": //listado de plagas
		include_once('admin/user/includes/php/tablesorter.php');
		include_once("plagas/plagas.php");
		break;
	case "plagas/tipos":
		include_once("plagas/plagas_tipos.php");
		break;
		#### /// TERMINA PLAGAS

		#### /// CREDITOS DEL SITIO
	case "creditos/":
		include_once("creditos.php");
		break;
		#### /// TERMINA CREDITOS DEL SITIO

	default:
		include("inicio.php"); /// Pagina default 
		break;
} #### //// END switch($pagina)
?>