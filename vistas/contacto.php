<?php include 'encabezado2.php' ?>

<body>
<article class="contenheaderc">
<!-- <p></p> -->
	<header>
		<i class="fa fa-bars menu-abrir" aria-hidden="true"></i>
		<i class="fa fa-sort-asc menu-cerrar" aria-hidden="true"></i>
		<figure><img src="../img/chipahua.png" class="img-responsive" alt=""></figure>
		<div id="menu" class="menu">
			<ul>
				<li><a href="../index.php"><span><i class="fa fa-home" aria-hidden="true"></i></span>&nbsp;INICIO</a></li>
				<li><a href="nosotros.php"><span><i class="fa fa-users" aria-hidden="true"></i></span>&nbsp;QUIENES SOMOS</a></li>
				<li><a href="servicios.php"><span><i class="fa fa-suitcase" aria-hidden="true"></i></span>&nbsp;SERVICIOS</a></li>
				<li class="select"><a href="contacto.php"><span><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp;CONTACTO</a></li>
			</ul>
		</div>
	</header>
</article>


	<form class="contact_form" action="#" method="post">

    <ul>

       <li>

            <h2>Formulario de contacto</h2>

       </li>

       <li>

           <label for="name">Nombre (s):</label>

           <input type="text"  name="nombre" placeholder="Nombre completo" required />

       </li>

       <li>

           <label for="email">Email:</label>

           <input type="email" name="correo" placeholder="ejemplo@ejemplo.com" required />

       </li>

       <li>

           <label for="website">Teléfono:</label>

           <input type="url" name="telefono" placeholder="Escriba su numero de teléfono" required />

       </li>

       <li>

           <label for="Mensaje">Mensaje:</label>

           <textarea name="mensaje" cols="40" rows="6" required ></textarea>

       </li>

        <li>

          <button class="submit" type="submit">Enviar</button>

        </li>

    </ul>

</form>

<article class="contendirecc">
	<article class="direcc">
		<div class="col-xs-12 .col-sm-12 col-md-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Llámanos
                            <span class="pull-right"><i class="fa fa-fax" aria-hidden="true"></i></span></div>
                        <div class="panel-body" style="text-align: center;">Pendiente</div>
                    </div>
                </div>

                <div class="col-xs-12 .col-sm-12 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Horarios
                            <span class="pull-right"><i class="fa fa-power-off" aria-hidden="true"></i></span></div>
                        <div class="panel-body" style="text-align: center;">Lunes a Viernes de 9am a 6pm</div>
                    </div>
                </div>
                <div class="col-xs-12 .col-sm-12 col-md-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Correo
                            <span class="pull-right"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></div>
                        <div class="panel-body" style="text-align: center;">info@chipaua.com
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 .col-sm-12 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Dirección
                            <span class="pull-right"><i class="fa fa-globe" aria-hidden="true"></i></span></div>
                        <div class="panel-body" style="text-align: center;">C.11 #308 entre 60 y 86 Fracc. del Norte. Mérida, Yucatán, México.</div>
                    </div>
                </div>
	</article>
	<article class="mapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.1507896355208!2d-89.62237367083014!3d21.008538899125583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676a894f6fdff%3A0x89d8b8e13fd291c6!2sCalle11+308%2C+Fraccionamiento+del+Nte%2C+97120+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1486063893260" width="600" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
	</article>
</article>
<footer>
	<p class="textpie">Derechos de autor 2017© | LIMPIEZA Y VIGILANCIA ESPECIALIZADA CHIPAUA S.A. de C.V.</p>
	<p class="textpie2">info@chipahua.com</p>
</footer>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
</body>
</html>
