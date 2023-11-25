<?php
	require_once('../lib/set_result.php');
    //root function
    function classListQueryMain($Data) {
		//create class DTO
		require_once("../model/DTO/classDTO.php");
		$classParams = new classDTO(@$Data['classNumber'], @$Data['className'], @$Data['classMode'], @$Data['classProfessor'], @$Data['classPeriod'], @$Data['classGrades'], @$Data['classNote'], @$Data['classDivide']);
		require_once("../model/DAO/classDAO.php");
		$classListSQL = new classListSQL($classParams);
		
		if ($Data['query'] === "insert") {
			if ($classListSQL->queryInsert())
				return (make_result(true, "classList에 insert 성공!"));
			else
				return (make_result(false, "classList(insert): 아직 구현되지 않은 기능입니다."));
		}
		else if ($Data['query'] === "select") {
			$classList = $classListSQL->querySelect();
			if ($classList)
				return (make_result(true, "", $classList));
			else
				return (make_result(false, "classList(select_something): 아직 구현되지 않은 기능입니다."));
		}
		else if ($Data['query'] === "selectAll") {
			$classList = $classListSQL->querySelectAll();
			if ($classList)
				return (make_result(true, "", $classList));
			else
				return (make_result(false, "특정 오류로 강의를 불러오는데 실패했습니다."));
		}
		else if ($Data['query'] === "update") {
			if ($classListSQL->queryInsert())
				return (make_result(true, "classList에 update 성공!"));
			else
				return (make_result(false, "classList(update): 아직 구현되지 않은 기능입니다."));
		}
		else if ($Data['query'] === "delete") {
			if ($classListSQL->queryInsert())
				return (make_result(true, "classList에 update 성공!"));
			else
				return (make_result(false, "classList(delete): 아직 구현되지 않은 기능입니다."));
		}
		else {
			return (make_result(false, "잘못된 요청입니다."));
		}
    }
?>