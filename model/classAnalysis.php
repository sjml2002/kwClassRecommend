<?php
    //root function
    function classAnalysisMain($major, $submajor, $year, $semester) {
        echo "전공: ".$major."\n";
		echo "부전공: ".$submajor."\n";
		echo $year."학년";
		echo $semester."학기";
		//일부러 echo 했음 이제 이걸로 강의 분석하면됨
		//여기서 강의 리스트 저장한 DB에서 사용자와 맞는 강의 가져오면 됨
		return (true);
    }

?>