<?php
    try{
        //id로 사용자 정보 get
        $getBody = json_decode($_GET['data']);
        $latitude = $getBody->latitude;
        $longitude = $getBody->longitude;
        
        require_once("../DBconnect.php");

        //임시 데이터
        $returnArray = array(
            array(
                'id'=> 1, 
                'age'=>array(20, 30, 10),
                'gender'=>array("female", "male"),
                'job' => array("worker", "student"),
                'population' => 1000,
                'regionData' => array("latitude" => 37.1, "longitude" => -122.7),
            ),
            array(
                'id'=> 2, 
                'age'=>array(30, 60, 50, 20, 10),
                'gender'=>array("female", "male"),
                'job' => array("baeksu", "worker", "student"),
                'population' => 10000,
                'regionData' => array("latitude" => 38.5, "longitude" => -123.1),
            ),
        );

        //DB작업 필요
        
        // $loginSelect = $db_conn->prepare("select id, pw, salt from userinfo where id = ?");
        // $loginSelect->bind_param("s", $inputID);
        // if($loginSelect->execute()) {
        //     $result = $loginSelect->get_result();
        //     if($result->num_rows == 1) {
        //         $loginInfo = $result->fetch_array(MYSQLI_ASSOC);
        //         $DBid = $loginInfo['id'];
        //         $DBpw = $loginInfo['pw'];
        //         $DBsalt = $loginInfo['salt'];
        //         if(password_verify($DBsalt . $inputPW, $DBpw)) {
        //             //로그인 성공
        //             $returnArray = array("result"=>true);
        //         }
        //         else{
        //             throw new exception("아이디와 비밀번호가 다릅니다.");
        //         }
        //     }
        //     else{
        //         //로그인 실패
        //         throw new exception("아이디가 없습니다.");
        //     }
        // }
        // else{
        //     //서버오류
        //     throw new exception("서버오류");
        // }
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