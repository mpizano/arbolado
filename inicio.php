<?php
$pagina_vacia = '';
//generarBreadcrumb($pagina_vacia, $dic_vacio);
?>
<style>
  .modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.5);
    /* Fondo oscuro con transparencia */
    z-index: 1000;
    /* Asegura que el modal se coloque encima de todo */
    overflow: auto;
    /* Permite el desplazamiento si es necesario */
  }

  .modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    width: 95vw;
    /* 80% del ancho de la ventana */
    height: 95vh;
    /* 80% de la altura de la ventana */
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>
<div class="page-header">
  <h2 class="text-center">MODELO EDUCATIVO - CUCEA</h2>
</div>
<!-- Menú de navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CUCEA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#introduccion">Introducción</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sobre-nosotros">Sobre nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#modelo-educativo">Modelo educativo</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Contenido -->
<div class="container">
  <!-- Introducción breve -->
  <section id="introduccion" class="my-5">
    <div class="card mb-4">
      <div class="card-header">
        <h3>Introducción</h3>
      </div>
      <div class="card-body">
        <p class="text-justify">En la segunda década del siglo XXI, los cambios en la sociedad han sido significativos y han desafiado a las instituciones educativas a adaptarse. Consciente de estos desafíos, la Universidad de Guadalajara, a través del Centro Universitario de Ciencias Económico Administrativas (CUCEA), ha tomado medidas para reestructurar sus funciones académicas y administrativas. Mediante la creación de un modelo educativo, el CUCEA busca responder a las necesidades de una sociedad en constante cambio, en la que los avances tecnológicos y la globalización afectan a todos los aspectos de la vida cotidiana.</p>
      </div>
    </div>
  </section>

  <!-- Sobre nosotros -->
  <section id="sobre-nosotros" class="my-5">
    <h2 class="text-center">Sobre nosotros</h2>
    <!-- Visión y misión -->
    <div class="card mb-4">
      <div class="card-header">
        <h3>Visión y misión</h3>
      </div>
      <div class="card-body">
        <p class="text-justify">La misión del CUCEA es ser un referente académico de excelencia, comprometido con la formación de profesionales capacitados para enfrentar los desafíos del siglo XXI. Su visión es liderar la transformación educativa en el ámbito económico-administrativo, fomentando la innovación, el pensamiento crítico y la responsabilidad social.</p>
      </div>
    </div>

    <!-- Historia -->
    <div class="card mb-4">
      <div class="card-header">
        <h3>Historia</h3>
      </div>
      <div class="card-body">
        <p class="text-justify">El CUCEA cuenta con una trayectoria de 30 años en la impartición de programas educativos orientados a las ciencias económico-administrativas. Desde su fundación, ha desempeñado un papel clave en la formación de profesionales exitosos, consolidándose como un referente académico en el ámbito económico-administrativo. El centro se ha adaptado constantemente a los cambios sociales, tecnológicos y económicos, manteniendo su compromiso con la excelencia y la tradición académica.</p>
      </div>
    </div>
  </section>


  <!-- Sección Modelo Educativo -->
  <section id="modelo-educativo" class="my-5">
    <h2 class="text-center">Modelo Educativo</h2>

    <!-- Descripción -->
    <div class="card mb-4">
      <div class="card-header">
        <h3>Descripción</h3>
      </div>
      <div class="card-body">
        <p class="text-justify">El modelo educativo del CUCEA responde a las demandas de la sociedad actual mediante un enfoque centrado en el estudiante. Promueve la formación continua a lo largo de la vida, la integración de tecnología en el proceso de aprendizaje y la aplicación de la inteligencia distribuida para un enfoque más holístico e inclusivo.</p>
      </div>
    </div>

    <!-- Objetivos -->
    <div class="card mb-4">
      <div class="card-header">
        <h3>Objetivos</h3>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Formación continua: Oportunidades de aprendizaje continuo.</li>
          <li class="list-group-item">Integración de tecnología: Uso moderno de tecnología educativa.</li>
          <li class="list-group-item">Enfoque en inteligencia distribuida: Uso intensivo de redes y tecnología.</li>
        </ul>
      </div>
    </div>

    <!-- Impacto esperado -->
    <div class="card mb-4">
      <div class="card-header">
        <h3>Impacto Esperado</h3>
      </div>
      <div class="card-body">
        <p class="text-justify">El modelo educativo del CUCEA busca tener un impacto positivo tanto en los estudiantes como en la sociedad en general. Al promover una educación centrada en el estudiante y en la tecnología, el CUCEA prepara a los estudiantes para enfrentar los desafíos de un mundo en constante cambio. Además, su compromiso con la formación continua y la inteligencia distribuida ayudará a los estudiantes a convertirse en líderes innovadores y responsables en sus campos.</p>
        <p class="text-justify">El modelo educativo también contribuye a la sociedad al fomentar la creación de ciudadanos críticos, conscientes y capaces de abordar problemas complejos. En última instancia, el CUCEA aspira a ser un motor de cambio positivo y un ejemplo de excelencia académica en el ámbito económico-administrativo.</p>
      </div>
    </div>
  </section>

  <!-- Botón para abrir datos -->
  <button id="opener" class="btn btn-info btn-lg">Abrir Modelo Educativo</button>
</div>
<!-- Diálogo para mostrar datos -->
<div id="dialog" title="Modelo Educativo - CUCEA" style="background-image: url('indicadores_960.png'); background-size: contain; background-position: center; background-repeat: no-repeat;">
  <div id="loading">Cargando...</div>
  <iframe id="iframeContent" width="100%" height="100%" src=""></iframe>
</div>

<!-- Script para manejar el diálogo y cargar datos -->
<script>
  $(document).ready(function() {
    // Configuración del diálogo modal
    $("#dialog").dialog({
      autoOpen: false,
      modal: true,
      width: '95%', // Ancho del 95% de la pantalla
      resizable: true,
      // Ajustar el alto según el contenido
      height: 'auto',
      create: function(event, ui) {
        // Ajusta el tamaño de la imagen de fondo al tamaño del diálogo cuando se crea
        adjustDialogBackground();
      },
      resize: function(event, ui) {
        // Ajusta el tamaño de la imagen de fondo al tamaño del diálogo cuando se redimensiona
        adjustDialogBackground();
      }
    });

    // Evento de clic para abrir el diálogo y cargar el iframe
    $("#opener").click(function() {
      // Establece la URL que deseas cargar en el iframe
      var iframeSrc = "modelo/";

      // Establece la fuente del iframe
      $("#iframeContent").attr("src", iframeSrc);

      // Muestra el diálogo modal
      $("#dialog").dialog("open");

      // Muestra un mensaje de carga (opcional)
      $("#loading").show();
    });

    // Evento de carga del iframe
    $("#iframeContent").on('load', function() {
      // Oculta el mensaje de "Cargando..."
      $("#loading").hide();

      // Ajusta el tamaño del diálogo al 95% de la pantalla después de que el contenido esté cargado
      var screenWidth = $(window).width();
      var screenHeight = $(window).height();
      $("#dialog").dialog("option", {
        width: screenWidth * 0.95,
        height: screenHeight * 0.95
      });

      // También puedes ajustar el tamaño del iframe para que coincida con el tamaño del diálogo
      $("#iframeContent").width($("#dialog").width()).height($("#dialog").height());

      // Ajustar el tamaño de la imagen de fondo al tamaño del diálogo
      adjustDialogBackground();
    });

    // Función para ajustar el tamaño de la imagen de fondo
    function adjustDialogBackground() {
      $("#dialog").css({
        backgroundSize: 'contain', // O puedes usar 'cover' según lo que desees
        backgroundPosition: 'center',
        backgroundRepeat: 'no-repeat'
      });
    }
  });
</script>
