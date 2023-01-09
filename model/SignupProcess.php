<?php
    //root function
    function signupProcess($id, $pw, $major, $subMajor) { 
		//create userDTO
		require_once("../model/DTO/signupDTO.php");
        $signUser = new SignupUserDTO($id, $pw, $major, $subMajor);
		
        return signupDBinsert($signUser);
    }

    function signupDBinsert($signUser){
        require_once("../model/DAO/signupDAO.php");
        $signupSQLobject = new SignupSQL($signUser);
        if($signupSQLobject->checkObject()){
            return $signupSQLobject->QuerySignup();
        }
        else{
            return false;
        }
    }
?>