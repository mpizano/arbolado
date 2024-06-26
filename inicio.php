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
  <h2 class="text-center">MPM</h2>
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
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Vjqi_3J8Xxo?si=5xMFJkp6xz6yoJNW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
