<?php
	include("conexion.php");
	$sql = "SELECT * FROM productos";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo '<rss version="2.0">
				<channel>
				    <title>ZDE</title>
				    <link>https://txapitel.herokuapp.com/</link>
				    <language>es-ES</language>
				    <description>Productos</description>
				    <generator>Autor del RSS</generator>';
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Precio" . $row["precio"]. " - Descripcion" . $row["descripcion"]. "<br>";
	        echo '<item>
			    	<id>'.$row["id"].'</id>
					<title>'.$row["nombre"].'</title>
					<precio>'.$row["precio"].'</precio>
					<description><![CDATA['.$row["descripcion"].']]></description>
					<content:encoded><![CDATA[]]></content:encoded>
				  </item>'; 
	    }
	    echo '</channel>
				  </rss>';
	} else {
	    echo "0 results";
	}
?>