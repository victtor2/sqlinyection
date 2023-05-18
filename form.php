<?php
	if (($id = mysql_connect("127.0.0.1","root","conexion1")) == false) {
		// code...
		die("Error de conexion");
	}

	if (mysql_select_db("users1",$id) == false) {
		// code...
		die("Error en seleccionar DB");
	}

	$sql = "SELECT * FROM usuarios WHERE username ='{$_POST['nombre']}'";
	echo "El query es : <br>$sql<br><br>";

	if (($result = mysql_query($sql, $id)) === false) {
		// code...
		die("Error en select: " . mysql_error($id));
	}

	while ($row = mysql_fetch_assoc($result)) {
		// code...
		print_r($row);
		echo "<br/>";
	}

	mysql_free_result($result);
	mysql_close($id);

<!-- 'or'1'='1 -->