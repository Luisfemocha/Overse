<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<title>ADMINISTRADOR</title>
</head>
<body class="cuerpo">
	<header>
		<div class="contenedor">
			<h2 class="logotipo">OVERSE</h2>
			<nav>
				<a href="home" >Inicio</a>
				<a href="tienda">Tienda</a>
				<a href="registro">Registro</a>
				<a href="blog">Blog</a>
				<a href="acercade">Acerca de</a>
				<a href="admin" class="activo">ADMIN</a>
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CRUD</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="Cliente">Cliente</a>
					<a class="dropdown-item" href="Empleado">Empleado</a>
					<a class="dropdown-item" href="Empresa">Empresa</a>
					<a class="dropdown-item" href="Juego">Juego</a>
					<a class="dropdown-item" href="Stock">Stock</a>
					<a class="dropdown-item" href="Venta">Venta</a>
				</div>
			</nav>
		</div>
    </header>
	
    <main>
		<table class="table table-bordered">
		<thead>
			<tr>
			<th scope="col"><a href="Cliente">CLIENTE</a></th>
			<th scope="col"><a href="Empleado">EMPLEADO</a></th>
			<th scope="col"><a href="Empresa">EMPRESA</a></th>
			<th scope="col"><a href="Juego">JUEGO</a></th>
			<th scope="col"><a href="Stock">STOCK</a></th>
			<th scope="col"><a href="Venta">VENTA</a></th>
			</tr>
		</thead>
	</table>
    </main>
    <footer>
	<p>Secretaría de comunicaciones <br>
	StardenburdenhardenbartCESDE@gmail.com</p>

    </footer>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!--<script src="js/main.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>