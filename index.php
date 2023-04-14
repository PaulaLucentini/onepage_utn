<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Actividad integradora</title>
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<link rel="stylesheet" type="text/css" href="css/lightbox.min.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
</html>
<body>
	<header>
		<div id="marca"></div>
		<nav id="botonera">
			<ul>
				<li><a href="#HOME">HOME</a></li>
				<li><a href="#PRODUCTOS">PRODUCTOS</a></li>
				<li><a href="#TALLER">TALLER</a></li>
				<li><a href="#CONTACTO">CONTACTO</a></li>
			</ul>
		</nav>
	</header>
	<section id="HOME">
		<div id="HOMEPRESENTACION">
			<p>La <strong>VELA</strong>, algo tan básico y bello, simple y necesario, siempre presente en diferentes momentos de nuestras vidas, es un símbolo, que además de acompañarnos, nos transmite paz y nos transporta a recuerdos inesperados con solo activar nuestro sentido del olfato.</p>
		</div>
		
		
	</section>
	<section id="PRODUCTOS">
		<div id="PRODUCTO1"><p>esencia aromática</p></div>
		<div id="PRODUCTO2"><p>corta pabilo</p></div>
		<div id="PRODUCTO3"><p>apagador</p></div>
		<div id="PRODUCTO4"><p>cera de soja</p></div>
		<div id="PRODUCTO6">
			<img src="imagenes/velabaja.jpg">
		</div>
		<div id="PRODUCTO7">
			<img src="imagenes/velamadera.jpg">
		</div>
		<div id="PRODUCTO8">
			<img src="imagenes/velablanca.png">
		</div>
		<div id="PRODUCTO9">
			<img src="imagenes/maderaramo.jpg">
		</div>
	</section>
	<section id="TALLER">
		<h2>TALLER</h2>
		<nav id="btn_taller">
			<ul>
				<li><a href="index.php?id=mt#TALLER">Materiales</a></li>
				<li><a href="index.php?id=el#TALLER">Elaboración</a></li>
				<li><a href="index.php?id=pr#TALLER">Producto</a></li>	
		</nav>
		<?php 
		    if (isset($_GET['id'])) {
		    
		    switch ($_GET ['id'] ) {

			 case 'mt':
			   $titulo = "Materiales";
			   $contenido = "En Chateau Lumiere tenemos el compromiso de crear productos amigables con el medio ambiente. Las velas son elaboradas con cera de origen vegetal y aromatizadas con aceites esenciales. Nuestros productos no emiten hollín, no contaminan y duran cinco veces más que la cera de parafina. Los materiales que se necesitan son: un recipiente que no sea plástico, cera de soja, pabilo y esencia a gusto.";
			   $imagen = "cera.jpg";
				break;
			case 'el':
			   $titulo = "Elaboración";
			   $contenido = "Colocar cera de soja a baño maría, revolver hasta que se derrita. Preparar, mientras se entibia la cera, el envase. limpiarlo, colocarle un pabilo en el centro, previamente inserto en un ojalillo. (pegar el ojalillo con silicona). Cuando la cera esté tibia, agregar esencia aromática a gusto, mezclar y volcar en el recipiente. Dejar enfriar y cortar pabilo.";
			   $imagen = "velapabilo.jpg";
			  break;
			 case 'pr':
			 	$titulo = "Producto";
			 	$contenido = "La vela lista para encender.no olvides de intencionarla, tu energía está en ella. El fuego es un transmutador de energías, aprovechá al máximo este recurso mágico.";
			 	$imagen = "velaprendida.jpg";
			 	break;

		}

		?>
		<div id="cont_taller"></div>
		     <div id="img_taller">
		     	<img src= "imagenes/<?php echo $imagen; ?>">
		     </div>
		     <div id="info_taller">
		     	<h3>
		     		<?php echo $titulo; ?>
		     	</h3>
		     	<p>
		     		<?php echo $contenido; ?>
		     	</p>
		     </div>
	<?php } else {
		echo "<h3>Seleccione una opción para ver más información.</h3>";
	}?>

	</section>
	<section>
		<div id="CONTACTO">
			<h2>CONTACTO</h2>
			<form action="consultas.php" method="POST">
				<input type="text" name="nombre" placeholder="Nombre" required maxlength="30">
				<input type="text" name="apellido" placeholder="Apellido" required maxlength="50">
				<input type="email" name="correo" placeholder="Correo Electrónico" required maxlength="100">
				<textarea name="consulta" placeholder="Consulta" rows="5" required></textarea>
				<input type="submit" value="Enviar Consulta" class="btn_form">
			</form>
			<?php
			if(isset($_GET['ok'])) {
				echo "<h4>Consulta enviada correctamente</h4>";
			}
			?>
		</div>
	</section>
	<section>
		<div id="galeria">
			<h2>GALERIA</h2>
			<a href="imagenes/macarron.jpg" data-lightbox="grupo1" data-title="Velas macarrons"><img src="imagenes/macarron.jpg" class="mini"></a>
			<a href="imagenes/maderitas.png" data-lightbox="grupo1" data-title="Velas centro de mesa"><img src="imagenes/maderitas.png" class="mini"></a>
			<a href="imagenes/conica.jpg" data-lightbox="grupo1" data-title="Vela Cónica"><img src="imagenes/conica.jpg" class="mini"></a>
			<a href="imagenes/coco.jpg" data-lightbox="grupo1" data-title="Vela de Coco"><img src="imagenes/coco.jpg" class="mini"></a>

		</div>
	</section>
	<footer>
		<div id="INFO">
			<p>MENDOZA</p>
			<p>ARGENTINA</p>
		</div>
		<div id="REDES">
			<img src="imagenes/iconoig.jpg">
			<p><a href="https://www.instagram.com/chateau_lumiere_conceptstore?r=nametag">chateau_lumiere_conceptstore</a></p>
		</div>
	</footer>

	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/lightbox-plus-jquery.js"></script>
	
</body>