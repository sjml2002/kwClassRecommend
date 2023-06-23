<?php
    //root function
    function classAnalysisMain($Data) {
        echo "전공: ".$Data['major']."\n";
		echo "부전공: ".$Data['submajor']."\n";
		echo $Data['year']."학년"."\n";
		echo $Data['semester']."학기"."\n";
		echo "분반: ".$Data['divideClass']."\n";
		echo "과제: ".$Data['assignment']."\n";
		echo "성적: ".$Data['grade']."\n";
		echo "출결방식: ".$Data['attendance']."\n";
		echo "조모임: ".$Data['teamplay']."\n";
		echo "시험횟수: ".$Data['exam']."\n";
		
		//일부러 echo 했음 이제 이걸로 강의 분석하면됨
		//여기서 강의 리스트 저장한 DB에서 사용자와 맞는 강의 가져오면 됨
		return (true);
    }

?>