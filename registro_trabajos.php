<?php
/* 
 * Ejemplo de una p�gina asegurada
 * Simplemente hay que a�adir esta l�nea de PHP al principio.
 */
require('php_lib/include-pagina-restringida.php'); //el incude para vericar que estoy logeado. Si falla salta a la p�gina de login.php
?>
<!doctype html>
<html lang="en">
	<head>
		<title>6&deg; Congreso de Matem&aacute;ticas - Registro Trabajos</title>
		<?php
			include_once "page/head.php";
		?>

		<script>
		<?php
		include "script/script_formulario.php";
		?>
		</script>		
	</head>

	<body>
            <div id="formatopagina">
		<!-- Cabecera de la p�gina-->
		<section id="header">
			<?php
			include "page/header.php";
			?>
		</section>
		
		<!--Barra de navegaci�n -->
		<section id="nav">
			<?php
				include "page/menucs.php";
			?>
		</section>
		
		<!--secci�n de contenido -->
		<section id="seccion" class="formatocentro">
			<?php
				include "content/RegistroTrabajos.php";
			?>
		</section>		
		
		<!-- aside de la p�gina -->
		<section id="aside">
			<?php
				include "page/aside.php";
			?>
		</section>

		<!-- Creditos de la pagina -->
		<section id="footer">
			<?php
				include "page/footer.php";
			?>
		</section>
            </div>
	</body>
</html>


