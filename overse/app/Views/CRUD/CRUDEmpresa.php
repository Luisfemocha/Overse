<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<title>CRUD Empresa - OVERSE</title>
</head>
<body class="cuerpo">
	<header>
		<div class="contenedor">
			<h2 class="logotipo">OVERSE</h2>
			<nav>
				<a href="home" >Inicio</a>
				<a href="tienda">Tienda</a>
				<a href="registro">Registro</a>
				<a href="recientes">Más Recientes</a>
				<a href="blog">Blog</a>
				<a href="admin" >ADMIN</a>
				<a class="nav-link dropdown-toggle activo" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CRUD</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="Cliente">Cliente</a>
					<a class="dropdown-item" href="Empleado">Empleado</a>
					<a class="dropdown-item dropActivo textoPrincipal" href="Empresa">Empresa</a>
					<a class="dropdown-item" href="Juego">Juego</a>
					<a class="dropdown-item" href="Stock">Stock</a>
					<a class="dropdown-item" href="Venta">Venta</a>
				</div>
			</nav>
		</div>
    </header>
    <main>
		<button type="button" class="btn btn-dark btn-lg btn-block" data-toggle="modal" data-target="#crearC">CREAR EMPRESA</button>
		<div class="modal fade" id="crearC" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Crear Empresa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url('public/CRUDEmpreCont/registrar') ?>" method="post">
					<div class="form-group col-xl-auto">
						<input type="number" class="form-control" placeholder="ID" name="id" id="id">
					</div>
					<div class="form-group col-xl-auto">
						<input type="text" class="form-control" placeholder="Nombre" name="nom" id="nom">
					</div>
					<div class="form-group col-xl-auto">
						<input type="number" class="form-control" placeholder="Teléfono (opcional)" name="tel" id="tel">
					</div>
					<div class="form-group col-xl-auto">
						<input type="text" class="form-control" placeholder="Correo (opcional)" name="cor" id="cor">
					</div>
					<div class="form-group col-xl-auto">
						<input type="text" class="form-control" placeholder="Direccion (opcional)" name="dir" id="dir">
					</div>
					<div class="form-group col-xl-auto">
						<button type="submit" class="btn btn-light btn-lg btn-block" value="registro" id="registrar" name="registrar">Crear Empresa</button>
					</div>
					<?php if(session("mensaje")):?>
						<div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
							<?= session('mensaje') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php endif ?>
				</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
				</div>
			</div>
		</div>
		<table class="table table-bordered">
		<thead>
			<tr>
			<th scope="col" class="textoPrincipal">ID</th>
			<th scope="col" class="textoPrincipal">NOMBRE</th>
			<th scope="col" class="textoPrincipal">TELEFONO</th>
			<th scope="col" class="textoPrincipal">CORREO</th>
			<th scope="col" class="textoPrincipal">DIRECCION</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($empresas as $empresa=>$valor):?>
               <tr>
                    <td class="textoPrincipal"><?php echo($valor->idEmp) ?></td>
                    <td class="textoPrincipal"><?php echo($valor->nomEmp) ?></td>
                    <td class="textoPrincipal"><?php echo($valor->telEmp) ?></td>
                    <td class="textoPrincipal"><?php echo($valor->corEmp) ?></td>
                    <td class="textoPrincipal"><?php echo($valor->dirEmp) ?></td>
                    <td class="textoPrincipal"><a href="<?php echo base_url('public/CRUDEmpreCont/eliminar'.$valor->idEmp) ?>" class="btn btn-danger">Eliminar</a></td>
               </tr>
            <?php endforeach?>
		</tbody>
	</table>
    </main>
    <footer>

    </footer>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!--<script src="js/main.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>