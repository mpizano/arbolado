<?php
include_once("includes/php/limpiar.php");
include_once("includes/php/diccionario.php");
$pagina_vacia = "";
$dic_vacio = "";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-MX" xml:lang="es-MX">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta id="" name="" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <title>Modelo Educativo</title>
  <meta name="Keywords" content="" />
  <meta name="Description" content="Modelo Educativo" />
  <meta name="Author" content="martin.pizano@udg.mx" />
  <!-- CSS styles for this template -->
  <link href="includes/css/offcanvas.css" rel="stylesheet">
  <link href="includes/css/styles.css" rel="stylesheet">

  <!-- MENU styles for this template -->
  <link href="includes/css/menu.css" rel="stylesheet">

  <!-- Los estilos de las librerías:
				Bootstrap core CSS -->

  <link rel="stylesheet" href="includes/css/font-awesome.min.css">
  <link href="includes/css/jquery-ui.css" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/31cc1d776d.js" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <style>
    .panel {
      width: 800px;
      height: 500px;

    }

    .resizable {
      overflow: hidden;
      resize: both
    }

    .draggable {
      position: absolute;
      z-index: 100
    }

    .draggable-handler {
      cursor: pointer
    }

    .dragging {
      cursor: move;
      z-index: 200 !important;
    }

    .menu_2 {
      position: relative;
      margin-top: 0px;
      z-index: 10000;
    }

    .menu_2.fixed {
      position: fixed;
      top: 0;
      right: 0;
    }

    /* Estilos para los íconos de navegación */

    .bc-icons-2 {
      position: relative;
      width: 100%;
      margin-top: 45px;
      z-index: 9999;
    }

    .bc-icons-2.fixed {
      position: fixed;
      top: 0;
      right: 0;
    }

    .sticky {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 999;
    }
  </style>

  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })

    window.addEventListener("scroll", function() {
      var menu = document.querySelector(".menu_2");
      var icons = document.querySelector(".bc-icons-2");
      var headerHeight = document.querySelector("header").offsetHeight;

      if (window.pageYOffset > headerHeight) {
        menu.classList.add("fixed");
        icons.classList.add("fixed");
      } else {
        menu.classList.remove("fixed");
        icons.classList.remove("fixed");
      }
    });
  </script>

</head>

<body>

  <?php include_once("includes/php/header.php"); ?>

  <div class="container">
    <?php include_once("main.php"); #### //// 
    ?>
  </div><!--  END div class="container"-->

  <?php include_once("includes/php/footer.php"); ?>
</body>
<script type="text/javascript">
  function mostrar() {
    document.getElementById("ocultar").style.display = "block";
  }

  function ocultar() {
    document.getElementById("ocultar").style.display = "none";
  }
</script>

</html>
