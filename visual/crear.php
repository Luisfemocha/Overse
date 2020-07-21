<?php
    include("database.php");
    if(isset($_POST["ce"])){ //empleado
            //recibir
            $id= $_POST["ide1"];
            $nom= $_POST["nome1"];
            $tel= $_POST["tele1"];
            $esp= $_POST["esp1"]; //nulable

            //conectar
            $ops= new database();
            $ops->conectarConBaseDatos();

            //devolver
            if(empty($esp)){
                $resultado= $ops->alterarBaseDatos('Insert into empleado (idE, nomE, telE)  values("'.$id.'", "'.$nom.'", "'.$tel.'")');
            }
            else{
                $resultado= $ops->alterarBaseDatos('Insert into empleado values("'.$id.'", "'.$nom.'", "'.$tel.'", "'.$esp.'")');
            }
            
            if ($resultado){
                echo("Se ha creado el empleado con datos:");
                if(empty($esp)){
                    echo("ID: ".$id."\nNombre: ".$nom."\nTeléfono: ".$tel);
                }
                else{
                    echo("ID: ".$id."\nNombre: ".$nom."\nTeléfono: ".$tel."\nEspecialidades: ".$esp);
                }
            }
            else{
                echo"Error.";
            }
        }
        elseif(isset($_POST["cemp"])){ //empresa
            //recibir
            $id= $_POST["idEmp1"];
            $nom= $_POST["nomEmp1"];
            $tel= $_POST["telEmp1"]; /*nulable*/
            $cor= $_POST["corEmp1"]; /*nulable*/
            $dir= $_POST["dirEmp1"]; /*nulable*/

            //conectar
            $ops= new database();
            $ops->conectarConBaseDatos();

            //devolver
            if(empty($dir)){
                $resultado= $ops->alterarBaseDatos('Insert into empresa (idEmp, nomEmp, telEmp, corEmp)  values("'.$id.'", "'.$nom.'", "'.$tel.'", "'.$cor.'")');
            }
            else{
                $resultado= $ops->alterarBaseDatos('Insert into empresa values("'.$id.'", "'.$nom.'", "'.$tel.'", "'.$cor.'", "'.$dir.'")');
            }
            
            if ($resultado){
                echo("Se ha creado la empresa con datos:");
                echo("ID: ".$id."\nNombre: ".$nom."\nTeléfono: ".$tel."\nCorreo: ".$cor."\nDirección: ".$dir);
            }
            else{
                echo"Error.";
            }
        }
        else{
            echo "¿Cómo entró acá?...";
        }

?>