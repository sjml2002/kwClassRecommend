<?php
	require_once('../lib/set_result.php');
    //root function
    function signupProcess($id, $pw, $major) { 
		if (checkObject($id, $pw)) {
			//create userDTO
			require_once("../model/DTO/signupDTO.php");
			$signUser = new SignupUserDTO($id, $pw, $major);
			//DB Insert
			require_once("../model/DAO/signupDAO.php");
			$signupSQLobject = new SignupSQL($signUser);
			if ($signupSQLobject->QuerySignup())
				return (make_result(true, '회원가입 성공!'));
			else
				return (make_result(false, '특정 오류로 회원가입에 실패하였습니다. 다시 시도해주십시오'));
		}
		else {
			return (make_result(false, '아이디나 비밀번호가 형식에 맞지 않습니다.'));
		}
    }

	function checkObject($id, $pw) {
            //이메일과 pw 정규식으로 양식 확인
            $idReg = "/^[0-9]{10}$/";
            $pwReg = "/^[a-zA-Z][a-zA-Z0-9!@#$*]{7,19}$/";
            if(preg_match($idReg, $id) || preg_match($pwReg, $pw)){
                return true;
            }
            else{
                return false;
            }
        }
?>