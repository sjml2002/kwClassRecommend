<?php
    $db_conn = new mysqli("localhost", "root", "sjml0724@@", "scp");
	if($db_conn->connect_error){
		die("데이베이스에 오류가 생겼습니다.");
	}

	$db_conn->set_charset("utf8");
	//mysql 인코딩
?>