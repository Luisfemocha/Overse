<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>/css/style.css">

	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<title>OVERSE</title>
</head>
<body class="cuerpo">
	<header>
		<div class="contenedor">
			<h2 class="logotipo">OVERSE</h2>
			<nav>
				<a href="home" class="activo">Inicio</a>
				<a href="tienda">Tienda</a>
				<a href="registro">Registro</a>
				<a href="blog">Blog</a>
				<a href="acercade">Acerca de</a>
				<a href="admin">ADMIN</a>
			</nav>
		</div>
	</header>

	<main>
		<div class="juego-principal">
			<div class="contenedor">
				<h3 class="titulo">God of War</h3>
				<p class="descripcion">
					God of War (literalmente en español Dios de la Guerra) es una serie de videojuegos en 3ª. persona creada por SCE Santa Monica Studio y distribuida por Sony Computer Entertainment. Se basa en las aventuras de un semidiós espartano, Kratos, quien se enfrenta a diversos personajes de la mitología griega y nórdica, tanto héroes (Heracles, Teseo, Perseo, etc.); especies mitológicas (gorgonas, arpías, o minotauros); dioses griegos (Ares, Poseidón, Zeus, entre otros), titanes (como Cronos) y dioses primordiales (como Gaia). Aunque el guerrero espartano acostumbra enemistad con la mayoría de los dioses, recibe ayuda de muchos de ellos en algún momento de cada entrega, en especial de Atenea.
				</p>
				<button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
				<button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
			</div>
		</div>
	
		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Películas Recomendadas</h3>
				<div class="indicadores"></div>
			</div>
			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
				<div class="contenedor-carousel">
					<div class="carousel">
						<div class="pelicula">
							<a href="#"><img src="<?php echo base_url(); ?>/imagen/cod.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="<?php echo base_url(); ?>/imagen/days.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="<?php echo base_url(); ?>/imagen/fifa.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="<?php echo base_url(); ?>/imagen/for.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="<?php echo base_url(); ?>/imagen/god.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="<?php echo base_url(); ?>/imagen/MORTAL.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="<?php echo base_url(); ?>/imagen/san.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="<?php echo base_url(); ?>/imagen/TITAN.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="<?php echo base_url(); ?>/imagen/uncha.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="<?php echo base_url(); ?>/imagen/war.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>
    </main>
    <footer>
	<p>Secretaría de comunicaciones <br>
	StardenburdenhardenbartCESDE@gmail.com</p>
        
    </footer>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/jss/controlador.js"></script>
</body>