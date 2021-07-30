<?php
    try{
        //id로 사용자 정보 get
        $getBody = json_decode($_GET['data']);
        $inputID = $getBody->userID;
        $inputPW = $getBody->userPW;
        
        require_once("../DBconnect.php");

        $loginSelect = $db_conn->prepare("select id, pw, salt from userinfo where id = ?");
        $loginSelect->bind_param("s", $inputID);
        if($loginSelect->execute()) {
            $result = $loginSelect->get_result();
            if($result->num_rows == 1) {
                $loginInfo = $result->fetch_array(MYSQLI_ASSOC);
                $DBid = $loginInfo['id'];
                $DBpw = $loginInfo['pw'];
                $DBsalt = $loginInfo['salt'];
                if(password_verify($DBsalt . $inputPW, $DBpw)) {
                    //로그인 성공
                    $returnArray = array("result"=>true);
                }
                else{
                    throw new exception("아이디와 비밀번호가 다릅니다.");
                }
            }
            else{
                //로그인 실패
                throw new exception("아이디가 없습니다.");
            }
        }
        else{
            //서버오류
            throw new exception("서버오류");
        }
    } catch (exception $error) {
        //에러 메시지 출력
        $returnArray = array(
            "result"=>false,
            "errorMessage"=>$error->getMessage(),
        );
    } finally {
        echo json_encode($returnArray);
    }
?>
