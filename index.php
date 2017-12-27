<?php
	include("conexion.php");
	$sql = "SELECT * FROM productos";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$rows = array();
	    while($row = mysqli_fetch_assoc($result)) {
	        $rows[] = $row;
	    }
	    print json_encode($rows);
	} else {
	    echo "0 results";
	}
?>