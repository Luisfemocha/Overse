<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>REGISTRO - OVERSE</title>
</head>
<body class="cuerpo">
	<header>
		<div class="contenedor">
			<h2 class="logotipo">OVERSE</h2>
			<nav>
				<a href="home" >Inicio</a>
				<a href="tienda">Tienda</a>
				<a href="registro" class="activo">Registro</a>
				<a href="recientes">Más Recientes</a>
                <a href="blog">Blog</a>
                <a href="acercade">Acerca de</a>
				<a href="admin">ADMIN</a>
			</nav>
		</div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h5 class="textoprincipal">REGISTRATE EN NUESTRA WEB</h5>
                </div>
            </div>
        </div>  
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <form action="<?php echo base_url('public/regCont/registrar') ?>" method="post">
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
                            <input type="text" class="form-control" placeholder="Correo (opcional)" name="email" id="email">
                        </div>
                        <div class="form-group col-xl-auto">
                            <button type="submit" class="btn btn-light btn-lg btn-block" value="registro" id="registrar" name="registrar">Registrarse</button>
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
            </div>
        </div>
    </main>
    <footer>
	<p>Secretaría de comunicaciones <br>
	StardenburdenhardenbartCESDE@gmail.com</p>

    </footer>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!--<script src="js/main.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>