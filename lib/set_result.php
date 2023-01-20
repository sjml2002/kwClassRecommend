<?php
	//자체 request에 대한 자체적인 result
	function make_result($res, $msg, $data=null) {
		$res = array(
			'res'=>$res,
			'msg'=>$msg,
			'data'=>$data,
		);
		return (json_encode($res));
	}

	function route_errorPage($statusCode) {
		if($statusCode === "400"){
            header('Location: /view/errorPage/400BadRequest.html');
        }
        else if($statusCode === "404"){
            header('Location: /view/errorPage/404NotFound.html');
        }
        else if($statusCode === "500"){
            header('Location: /view/errorPage/500InternalServerError.html');
            //header location으로 500error페이지 만들어서 랜딩
        }
	}
?>