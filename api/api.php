<?php

require_once '../utils/dataBase.php';
require_once '../modelo/usuarios.php';

session_start();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];

if($method == "OPTIONS") {
    die();
}
	
	if($method == "GET"){
		
		$con = DataBase::connect();
		 // Obtener el valor del parámetro "orden" del formulario HTML
		$stmt = $con->prepare("SELECT * FROM ressenya");
		$stmt->execute();
		$result = $stmt->get_result();
		$ressenyaDB = array();
		while ($row = $result->fetch_assoc()) {
    		$ressenyaDB[] = $row;
		}
		echo json_encode($ressenyaDB);
		$con->close();

	}
	
	if($method == "POST"){
		
		$datosJSON = file_get_contents('php://input');
		$datos = json_decode($datosJSON);
		$con = DataBase::connect();
		$usuario = $_SESSION['usuariosr'];
		$pedido = $datos->pedido;
		$descripcion = $datos->descripcion;
		$valoracion = $datos->valoracion;
		$orden = $datos->orden;
		$stmt = $con->prepare("SELECT id_pedido FROM ressenya WHERE id_pedido = ?");
            $stmt->bind_param("i", $pedido);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                echo "<script>alert('Usuario registrado');</script>";
            } else {
		$stmt = $con->prepare("INSERT INTO ressenya (descripcion, nota, id_pedido, id_usuario) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("siii", $descripcion, $valoracion, $pedido, $usuario);
        $stmt->execute();
			}
		$con->close();
		
	}

?>
