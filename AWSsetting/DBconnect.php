<?php
	//
	error_reporting(E_ALL^ E_WARNING); //warning 메시지 출력 안해줌
	$hostName = "aa15mm1u2azepde.cwjspwjfimay.ap-northeast-2.rds.amazonaws.com";
	$userName = "admin";
	$password = "sjml0724";
	$DBName = "gpsservice";
	$port = "3306";
	$db_conn = new mysqli($hostName, $userName, $password, $DBName, $port);
	
	if($db_conn->connect_error == null) {
		$db_conn->set_charset('uft8mb4');
	
		//mysql 인코딩
		mysqli_query($db_conn, "set session character_set_connection=utf8mb4;");
		mysqli_query($db_conn, "set session character_set_results=utf8mb4;");
		mysqli_query($db_conn, "set session character_set_client=utf8mb4;");
	}
	else{
		throw new exception("데이터베이스 연결 오류");
	}
?>