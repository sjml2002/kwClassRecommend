<?php
	require_once('../lib/set_result.php');
    //root function
    function loginProcess($id, $pw) { 
        session_start();
		$loginUser = userDTO($id, $pw);
        $sessionValue = loginDBquery($id, $pw);
        if(!$sessionValue){ //로그인 실패
            return (make_result(false, '아이디나 비밀번호가 일치하지 않습니다.'));
        }
        else{
            //return값으로 sessionValue를 받음
            //로그인 세션 생성
            $_SESSION['token'] = $sessionValue;
            $_SESSION['id'] = $id;
            //controller에 로그인 성공을 알림
            return (make_result(true, '로그인 성공!'));
        }
    }

    function userDTO($email, $pw) {
        require_once("../model/DTO/loginDTO.php");
        $loginUser = new LoginUserDTO($email, $pw);
        return $loginUser;
    }

    function loginDBquery($email, $pw){
        require_once("../model/DAO/loginDAO.php");
        $loginUser = userDTO($email, $pw); //DTO
        $loginSQLobject = new LoginSQL($loginUser);
        return ($loginSQLobject->QueryLogin());
    }
?>