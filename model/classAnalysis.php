<?php
	require_once('../lib/set_result.php');
    //root function
    function classAnalysisMain($Data) {
        // echo "전공: ".$Data['major']."\n";
		// echo $Data['year']."학년"."\n";
		// echo $Data['semester']."학기"."\n";
		// echo "분반: ".$Data['divideClass']."\n";
		// echo "과제: ".$Data['assignment']."\n";
		// echo "성적: ".$Data['grade']."\n";
		// echo "출결방식: ".$Data['attendance']."\n";
		// echo "조모임: ".$Data['teamplay']."\n";
		// echo "시험횟수: ".$Data['exam']."\n";
		// echo "주관식: ".$Data['textAnswer']."\n";
		// echo "마음에 들었떤 강의: ".$Data['searchClass']."\n";
		//위의 echo 들은 input에 대한 debug echo

		//1. ML 서버에 http request 해서 lib에 json 파일 저장
		//1-1. (test) request했다치고 가져온 json file 은 /test_jsonFile 에 있음
		
		//2. json file 읽기
		$file = file_get_contents("../test_jsonFile/rank.json");
		$file = iconv("EUC-KR", "UTF-8", $file); //실제 인코딩 변경
		$file = str_replace('encoding="UTF-8"', 'encoding="EUC-KR"', $file); //인코딩 선언 변경

		$json = json_decode($file, true);
		//$json = preg_replace('/[\x00-\x1F\x7F]/u', '', $json);
		$json = json_encode($json, true);
		file_put_contents("../lib/rank.json", $json);
		
		//3. return make result
		return (true);
    }
?>