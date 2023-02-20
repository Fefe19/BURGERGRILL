<?php
    class USUARIOS{
        public static function addUser($correo,$name,$psswd){
            $con = DataBase::connect();

            

            $stmt = $con->prepare("INSERT INTO usuario (correo,nombre,contraseña) VALUES (?,?,?)");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss",$correo,$name,$psswd);
            //Execute statement
            $stmt->execute();
            $con->close();
        }

        public static function accesUser(){
            $con = DataBase::connect();
            $mail = $_POST['correo'];	
	        $password = $_POST['psswd'];
        
            //$stmt = $con->prepare("SELECT correo, contraseña FROM usuario WHERE correo=? AND contraseña=? ");
            //Bind variables to the prepared statement as parameters
            //$stmt->bind_param("ss",$mail,$password);
            //Execute statement
            //$stmt->execute();

            $sql = "SELECT id_usuario, correo, nombre, contraseña, rol FROM usuario WHERE correo = '$mail' AND contraseña='$password'";
            
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_assoc($result);

                

                    $_SESSION['usuariosr'] = $row['id_usuario'];

                    $_SESSION['correo'] = $row['correo'];

                    $_SESSION['nombre'] = $row['nombre'];

                    $_SESSION['contraseña'] = $row['contraseña'];

                    $_SESSION['rol'] = $row['rol'];

                    usuarioController::login();
               
            }

        }

        

        public static function modificarUsuario($alterCorreo, $alterNombre, $alterPsswd, $id_usuario){
            $con = DataBase::connect();
            $stmt = $con->prepare("UPDATE usuario SET correo= ?, nombre= ?, contraseña=? WHERE id_usuario=?");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssi", $alterCorreo, $alterNombre, $alterPsswd, $id_usuario);
            //Execute statement
            $stmt->execute();

            $con->close();
            
        }

    }

?>