<?php
    class SignupSQL {
        private $id;
        private $pw;
        private $salt;
		private $major;

        function __construct($SignUserDTO){
            $this->id = $SignUserDTO->getterID();
            $this->pw = $SignUserDTO->getterPW();
            $this->salt = $SignUserDTO->getterSalt();
			$this->major = $SignUserDTO->getterMajor();
        }

        function QuerySignup(){
            try{
                require_once("../model/DBconnect.php");
                //DB연동 후 id 똑같은거 있는지 검사 후 없으면 로그인 성공
                $signUserInsert = $db_conn->prepare("insert into user_info(id, pw, salt, major) values(?, ?, ?, ?);");
                $signUserInsert->bind_param("ssss", $this->id, $this->pw, $this->salt, $this->major);
                $result = $signUserInsert->execute();
                return $result;
            } catch (exception $e){
                var_dump($e);
                return false;
            }
        }
    }
?>