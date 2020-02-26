<?php
class NovemaxRequest {

	function getWriteError() {
		$e = serialize($_SESSION['error']);
		$e1 = unserialize($e);
		return $e1;
	}
	
	function getWriteTraceError() {
		$str = "";
		foreach($_SESSION['trace_error'] as $key => $value) {
			foreach($value as $key2 => $value2) {
				//if($key2 != "class" && $key2 != "file" && $key2 != "type" ) {
				if(var_dump($key2) != "" || var_dump($value2) != "") {
    	      		$str .= var_dump($key2)." - ". var_dump($value2)."<br>";
				}
			}
        }
		//echo var_dump($_SESSION['trace_error']);
		return $str;
	}
	
	function getRequestUri() {
		return $_SERVER["REQUEST_URI"];
	}

	function setRequest($var, $valor) {
		$_REQUEST[$var] = $valor;
	}
	
	function getSession($var) {
		return $_SESSION[$var];
	}
	
	function getRequest($var) {
		if(isset($_REQUEST[$var])) {
			//$security = new CI_Security();
			//return $security->xss_clean($_REQUEST[$var]);
			return $_REQUEST[$var];
		}
	}
	
	function get($var) {
		return $this->getRequest($var);
	}
	
	function getPost($var) {
		if(isset($_POST[$var])) {
			//$security = new CI_Security();
			//return $security->xss_clean( $_POST[$var]);
			return $_POST[$var];
		}
	}
	
	function getAttribute($var) {
		$rVar = $this->getRequest($var);
		if($rVar == "") {
			$rVar = $this->getPost($var);
		}
		return $rVar;
	}
	
	function write($var) {
		echo $_REQUEST[$var];
	}
	
	function setError($erro) {
		$_SESSION['error'] = $erro;//->getMessage();
		$_SESSION['trace_error'] = $erro->getTrace();
	}
	
}
?>