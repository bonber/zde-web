<?php
	include("conexion.php");
	$sql = "SELECT id, firstname, lastname FROM MyGuests";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Precio" . $row["precio"]. " - Descripcion" . $row["descripcion"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
?>