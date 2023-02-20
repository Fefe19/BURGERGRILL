<?php
    class USUARIOS{
        public static function addUser($correo,$name,$psswd){
            $con = DataBase::connect();

            $hashedPassword = password_hash($psswd, PASSWORD_DEFAULT);

            $stmt = $con->prepare("SELECT correo FROM usuario WHERE correo = ?");
            $stmt->bind_param("s", $correo);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                echo "<script>alert('Usuario registrado');</script>";
            } else {
                $stmt = $con->prepare("INSERT INTO usuario (correo, nombre, contraseña) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $correo, $name, $hashedPassword);
                $stmt->execute();
            }
        
            $con->close();
        }

        public static function accesUser($mail, $password) {
            $con = DataBase::connect();
        
            $stmt = $con->prepare("SELECT id_usuario, correo, nombre, contraseña, rol FROM usuario WHERE correo = ?");
            $stmt->bind_param("s", $mail);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        
                if (password_verify($password, $row['contraseña'])) {
                    $_SESSION['usuariosr'] = $row['id_usuario'];
                    $_SESSION['correo'] = $row['correo'];
                    $_SESSION['nombre'] = $row['nombre'];
                    $_SESSION['rol'] = $row['rol'];
                    usuarioController::login();
                } else {
                    echo "<script>alert('Contraseña incorrecta');</script>";
                }
            } else {
                echo "<script>alert('Correo incorrecto');</script>";
            }
        
            $con->close();
        }

        public static function modificarUsuario($alterCorreo, $alterNombre, $alterPsswd, $id_usuario){
            $con = DataBase::connect();

            $hashedPassword = password_hash($alterPsswd, PASSWORD_DEFAULT);
            
            $stmt = $con->prepare("UPDATE usuario SET correo= ?, nombre= ?, contraseña=? WHERE id_usuario=?");
            //Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssi", $alterCorreo, $alterNombre, $hashedPassword, $id_usuario);
            //Execute statement
            $stmt->execute();

            $con->close();
            
        }

    }

?>