<?php 

	$mysqli = new mysqli("localhost","root","","garden","3306");

	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}