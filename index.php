<?php include 'vistas/encabezado.php' ?>

<body>
<article class="contenheader">
<!-- <p></p> -->
	<header>
		<i class="fa fa-bars menu-abrir" aria-hidden="true"></i>
		<i class="fa fa-sort-asc menu-cerrar" aria-hidden="true"></i>
		<figure><img src="img/chipahua.png" class="img-responsive" alt=""></figure>
		<div id="menu" class="menu">
			<ul>
				<li class="select"><a href=""><span><i class="fa fa-home" aria-hidden="true"></i></span>&nbsp;INICIO</a></li>
				<li><a href="vistas/nosotros.php"><span><i class="fa fa-users" aria-hidden="true"></i></span>&nbsp;QUIENES SOMOS</a></li>
				<li><a href="vistas/servicios.php"><span><i class="fa fa-suitcase" aria-hidden="true"></i></span>&nbsp;SERVICIOS</a></li>
				<li><a href="vistas/contacto.php"><span><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp;CONTACTO</a></li>
			</ul>
		</div>
	</header>

	<article class="banner">
		<p class="tit text-info">LIMPIEZA COMPLETA!</p>
		<p class="subtit">Limpiamos los hogares y centros de trabajo</p>
	</article>

	<div class="btn-toolbar botonb" role="toolbar">
		  <a href="vistas/contacto.php">
		  	<button onclick="" type="button" class="btn btn-info btn-lg">
		    	<span><i class="fa fa-plus" aria-hidden="true"></i></span> Contáctanos
		  	</button>
		  </a>
	</div>
</article>


<article class="contenedor">
<h1 class="alserv text-info">Algunos de nuestros servicios</h1>

<article class="contenserv">
<div class="contendivs">
	<div class="imagen">
	<article class="icono"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Limpieza</article>
		<div class="info">
			<p class="headline">Limpieza</p>
			<p class="info2">Mantenemos sus instalaciones limpias y en buen estado, convirtiendolas en un espacio agradable que les permita realizar sus actividades como coresponden.</p>
		</div>
	</div>

	<div class="imagen2">
	<article class="icono2"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Productos de limpieza</article>
		<div class="info">
			<p class="headline">Productos de Limpieza</p>
			<p class="info2">Ofrecemos una gran variedad de productos de limpieza para el hogar o industriales.</p>
		</div>
	</div>

	<div class="imagen3">
	<article class="icono"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Vigilancia</article>
		<div class="info">
			<p class="headline">Vigilancia</p>
			<p class="info2">Mantenemos sus instalaciones seguras, contamos con guardias de seguridad con experiencia en el área asi como instación de camaras CCTV, mallas electricas, sistemas de alarmas, etc.</p>
		</div>
	</div>
</div>

<!-- <p class="btn btn-info"><a href="">SERVICIOS</a></p> -->
<div class="btn-toolbar boton" role="toolbar">
  <a href="vistas/servicios.php">
		  	<button onclick="" type="button" class="btn btn-info btn-lg">
		    	<span><i class="fa fa-plus" aria-hidden="true"></i></span> Servicios
		  	</button>
		  </a>
</div>

</article>

<article class="bannerindexabajo">
	<p>Somos la mejor inversión en la vigilancia de sus oficinas.</p>
	<div class="btn-toolbar boton" role="toolbar">
  <a href="vistas/contacto.php">
		  	<button onclick="" type="button" class="btn btn-info btn-lg">
		    	<span><i class="fa fa-plus" aria-hidden="true"></i></span> Contáctanos
		  	</button>
		  </a>
</div>
</article>

</article>
<footer>
	<p class="textpie">Derechos de autor 2017© | LIMPIEZA Y VIGILANCIA ESPECIALIZADA CHIPAUA S.A. de C.V.</p>
	<p class="textpie2">info@chipahua.com</p>
</footer>

<span class="ir-arriba icon-chevron-up"></span>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script type="text/javascript" src="js/iconoarriba.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>
