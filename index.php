<?php
	include("conexion.php");
	$sql = "SELECT * FROM heroku_4b836cd6b27d8ea";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Precio" . $row["precio"]. " - Descripcion" . $row["descripcion"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
?>