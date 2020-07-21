function registro() {
    /*var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "ajax_info.txt", true);
    xhttp.send();*/
    alert("REGISTRO REALIZADO.");
}

        <?php
            include("database.php");

            if(isset($_POST["agregar"])){
            //recibir
            $n= $_POST["name"];
            $m= $_POST["email"];
            $p= $_POST["psw"];

            //conectar
            $ops= new database();
            $ops->conectarConBaseDatos();

            //devolver
            $resultado= $ops->alterarBaseDatos('Insert into usuarios(usn, mail, psw) values("'.$n.'", "'.$m.'", "'.$p.'")');
            if ($resultado){
            echo("Se ha creado el usuario");
            }
            else{
            echo"Error.";
            }
            }
            elseif(isset($_POST["buscar"])){
            //recibir
            $n = $_POST["search"];

            //conectar
            $ops= new database();
            $ops->conectarConBaseDatos();

            //devolver
            $resultado= $ops->consultarEnBaseDatos('SELECT * FROM usuarios WHERE usn="'.$n.'"');
            echo("Nombre: $n. <br>ID: ".$resultado[0]['id']."<br>Correo: ".$resultado[0]['mail'].". <br>Su clave es de ".strlen($resultado[0]['psw'])." caracteres.");
            }
            elseif(isset($_POST["eliminar"])){
                //recibir
                $n = $_POST["delete"];

            //conectar
            $ops= new database();
            $ops->conectarConBaseDatos();

            //devolver
            $resultado= $ops->alterarBaseDatos('Delete from usuarios where usn="'.$n.'"');
            if ($resultado){
                echo("<br>Se ha borrado el usuario.");
            }
            else{
                echo("Error.");
            }
            }
            else{
                echo("Bienvenido.");
            }

            ?>
        </h2>
    </div>
    -->