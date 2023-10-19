<?php
    class LoginSQL {
        private $id;
        private $pw;
        /////////// Private ////////////////

        /////////// Public /////////////////
        function __construct($LoginUserDTO){
            $this->id = $LoginUserDTO->getterID();
            $this->pw = $LoginUserDTO->getterPW();
        }

        public function Querylogin() {
            try{
                //DB 연동해서 email과 pw 맞는지 확인작업, 성공시 로그인 완료
                require_once("../model/DBconnect.php");
                $searchUser = $db_conn->prepare("select * from user_info where id = ?");
                $searchUser->bind_param("s", $this->id);
                $result = $searchUser->execute();
                if($result) {
                    $result = $searchUser->get_result();
                    if($data_row = $result->fetch_array(MYSQLI_ASSOC)) {
                        $check_salt = $data_row['salt'];
                        if(password_verify($check_salt . $this->pw, $data_row['pw'])) {
                            //비밀번호 일치 (로그인 성공)
                            //세션 생성 후 DB에 넣기
                            $sessionValue = bin2hex(openssl_random_pseudo_bytes(16, $cstrong));
                            $updateToken = $db_conn->prepare("update user_info set sessionToken = ? where id= ? ;");
                            $updateToken->bind_param("ss", $sessionValue, $this->id);
                            if($updateToken->execute()) { return ($sessionValue); } //토큰 생성까지 성공
                            else { throw new exception("500"); } //서버 오류로 인한 토큰 생성 실패
                        }
                        else { return (false); } //비밀번호 불일치
                    }
				}
				return (false);
			} catch (exception $e){
				return route_exception($e->getMessage());
            }
        }
	}
?>