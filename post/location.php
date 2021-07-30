<?php
    try{
        //현재 사용자의 location DBinsert
        $postBody = file_get_contents("php://input");
        $postBody = json_decode($postBody);
        $userID = $postBody->data->userID;
        $latitude = $postBody->data->location->latitude;
        $longitude = $postBody->data->location->longitude;

        require_once("../DBconnect.php");
        //user의 세부정보 받아오기
        $selectUser = $db_conn->prepare("select age, gender, job from userinfo where id = ?");
        $selectUser->bind_param("s", $userID);
        if($selectUser->execute()) {
            $result = $selectUser->get_result();
            if($result->num_rows == 1) {
                $userInfo = $result->fetch_array(MYSQLI_ASSOC);
                $age = $userInfo['age'];
                $gender = $userInfo['gender'];
                $job = $userInfo['job'];
                //location 넣기
                $locationInsert = $db_conn->prepare(
                    "insert into location (latitude, longitude, age, gender, job) values (?, ?, ?, ?, ?)" );
                $locationInsert->bind_param("ddiis", $latitude, $longitude, $age, $gender, $job);
                if($locationInsert->execute()) {
                    //작업 완료
                    $returnArray = array("result" => true);
                }
                else {
                    throw new exception("서버 오류");
                }
            }
            else {
                throw new exception("서버요청 오류");
            }
        }
        else{
            throw new exception("서버 오류");
        }
    } catch(exception $e) {
        $returnArray = array(
            "result"=>false,
            "errorMessage"=>$e->getMessage(),
        );
    }
    finally {
        echo json_encode($returnArray);
    }
    
?>
