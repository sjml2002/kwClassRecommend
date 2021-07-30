<?php
    try {
         //회원가입
        $postBody = file_get_contents("php://input");
        $postBody = json_decode($postBody);

        $id = $postBody->data->id;
        $age = $postBody->data->age;
        $gender = $postBody->data->gender; //1==남자, 2==여자
        $job = $postBody->data->job;
        $salt = bin2hex(openssl_random_pseudo_bytes(32, $cstrong));
        $pw = password_hash($salt . $postBody->data->pw , PASSWORD_BCRYPT);
        
        require_once("../DBconnect.php");
        $userInsert = $db_conn->prepare("insert into userInfo (id, pw, salt, age, gender, job)
                                        values(?, ?, ?, ?, ?, ?)");
        $userInsert->bind_param("sssiis", $id, $pw, $salt, $age, $gender, $job);
        if($userInsert->execute()) {
            $returnArray = array("result"=>true);
        }
        else{
            //false반환시 id가 primary key이기 때문에 아이디 중복으로 인하여 false 반환
            throw new exception("아이디 중복이거나 다른 오류로 인해 진행할 수 없습니다.");
        }
    }
    catch(exception $e) {
        $returnArray = array(
            "result"=>false,
            "errorMessage"=>$e->getMessage(),
        );
    }
    finally {
        echo json_encode($returnArray);
    }
?>
