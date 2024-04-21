<?php

	function clear_string($cadena){
		//$cadena = utf8_decode($cadena);
		$comillas = array('"', '\'');
		$cambio   = array('&quot;', '&quot;');
		$cadena  = str_replace($comillas, $cambio, $cadena);
		//$cadena = htmlspecialchars($cadena, ENT_QUOTES);
		return $cadena;
	}

	function clear_string_actividad($cadena){
		$cadena = utf8_decode($cadena);
		$comillas = array('"', '\'');
		$cambio   = array('&quot;', '&quot;');
		$cadena  = str_replace($comillas, $cambio, $cadena);
		return $cadena;
	}

	function clear_string_fecha($cadena){
		$cadena = utf8_decode($cadena);
		list($mes,$dia,$anyo) = explode("/",$cadena);
		$cadena = $anyo.'-'.$mes.'-'.$dia;
		return $cadena;
	}

	function imprimir($cadena){
		//@$cadena = utf8_encode($cadena);
		#$cadena = nl2br($cadena);
		#$cadena = @mysql_real_escape_string($cadena);
		return $cadena;
	}
	
	function imprimir_textarea($cadena){
		#$cadena = mysql_real_escape_string($cadena);
		$cadena = nl2br($cadena);
		$cadena = utf8_encode($cadena);
		//$cadena = htmlspecialchars($cadena, ENT_QUOTES);
		return $cadena;
	}
	
	function imprimir_fecha_datepicker($cadena){
		$cadena = utf8_decode($cadena);
		list($anyo,$mes,$dia) = explode("-",$cadena);
		$cadena = $mes.'/'.$dia.'/'.$anyo;
		return $cadena;
	}
	
	
	function imprimir_pdf($cadena){
		$cadena = utf8_decode($cadena);
		#$cadena = nl2br($cadena);
		return $cadena;
	}
	
	function imprimir_minusculas($cadena){
		$cadena = utf8_encode($cadena);
		$cadena = strtolower($cadena);
		#$cadena = mysql_real_escape_string($cadena);
		return $cadena;
	}
	
	function imprimir_mayusculas($cadena){
		$cadena = utf8_encode($cadena);
		$cadena = strtoupper($cadena);
		#$cadena = mysql_real_escape_string($cadena);
		return $cadena;
	}

	function imprimir_contenido($cadena){
		$cadena = utf8_encode($cadena);
		#$cadena = mysql_real_escape_string($cadena);
		return $cadena;
	}
	
	function imprimir_fecha($cadena){
		$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		$dias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
		list($dia,$mes,$anyo) = explode("-",$cadena);
		@$dia = date($dia); // devuelve el día del mes
		@$mes = date($mes)-1; // devuelve el número del mes
		@$ano = date($anyo); // devuelve el año
		$cadena = $ano." de ".@$meses[$mes]." del ".$dia; 
		#$cadena = mysql_real_escape_string($cadena);
		return $cadena;
	}
		
	function imprimir_fecha_corta($cadena){
		$meses = array("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic");
		list($dia,$mes,$anyo) = explode("-",$cadena);
		@$dia = date($dia); // devuelve el día del mes
		@$mes = date($mes)-1; // devuelve el número del mes
		@$ano = date($anyo); // devuelve el año
		$cadena = $ano."-".@$meses[$mes]."-".$dia; 
		#$cadena = mysql_real_escape_string($cadena);
		return $cadena;
	}
		
	function imprimir_fecha_sinhora($cadena){
 		$cadena = date_format (new DateTime($cadena),"Y-m-d");
		$meses = array("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic");
		list($dia,$mes,$anyo) = explode("-",$cadena);
		@$dia = date($dia); // devuelve el día del mes
		@$mes = date($mes)-1; // devuelve el número del mes
		@$ano = date($anyo); // devuelve el año
		$cadena = $ano."-".@$meses[$mes]."-".$dia; 
		#$cadena = mysql_real_escape_string($cadena);
		return $cadena;
	}
		
	function imprimir_hora($cadena){
 		$cadena = date_format (new DateTime($cadena),"H:i");
		#$cadena = mysql_real_escape_string($cadena);
		return $cadena;
	}
		
	function imprimir_actividad($cadena){
		$cadena = utf8_encode($cadena);
		return $cadena;
	}

	function imprimir_200($cadena){
		$cadena = utf8_encode($cadena);
		$contar = strlen($cadena);
		if ($contar > '200'){
			$cadena = substr($cadena, 0, 200);
			$cadena = $cadena."...";
		}
		return $cadena;
	}

	function imprimir_sinhtml($cadena){
		$cadena = strip_tags($cadena, '<br>');
		$cadena = utf8_encode($cadena);
		return $cadena;
	}
	
	function imprimir_sinhtmlpdf($cadena){
		$cadena = utf8_encode($cadena);
		$cadena = strip_tags($cadena, '<br>');
		return $cadena;
	}
	
	function imprimir_monto($cadena){
		$cadena = utf8_encode($cadena);
		$cadena = number_format($cadena,2);
		return $cadena;
	}



	function generarBreadcrumb($pagina, $dic) {
		// Verificar si la página está vacía o no contiene ninguna sección
		if (empty($pagina) || $pagina == "/") {
			// Breadcrumb predeterminado
			echo '<nav aria-label="breadcrumb">';
			echo '<ol class="breadcrumb">';
			echo '<li class="breadcrumb-item active" aria-current="page">Inicio</li>';
			echo '</ol>';
			echo '</nav>';
			return;
		}
	
		// Separar la página en secciones
		$secciones = explode("/", $pagina);
	
		// Inicializar el breadcrumb
		echo '<nav aria-label="breadcrumb">';
		echo '<ol class="breadcrumb">';
	
		// Agregar el enlace de "Inicio"
		echo '<li class="breadcrumb-item"><a href="#">Inicio</a></li>';
	
		// Iterar sobre las secciones y agregar cada una al breadcrumb
		$ruta = '';
		foreach ($secciones as $seccion) {
			$ruta .= '/' . $seccion;
			echo '<li class="breadcrumb-item" aria-current="page"><a href="#">' . $dic . $seccion . '</a></li>';
		}
	
		echo '</ol>';
		echo '</nav>';
	}


?>
