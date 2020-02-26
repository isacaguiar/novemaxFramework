<?php
/**
 * Created on 07/01/2011
 * @author Isa Aguiar
 */
class NovemaxErrorRedirect {

	public function __construct($pg, $msg) {
		echo "-----------------------------------------";
		$txt = "<script type='text/javascript'>".
				"alert('$pg')".
				//"<!--".
				"window.location = ".$pg."?error=".$msg.";".
				//"//-->".
				"</script>";
		echo $txt;
	}
	
	 	
}
?>
