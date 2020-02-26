<?php
/**
 * Created on 07/01/2011
 * @author Isa Aguiar
 */
class NovemaxAlert {

	public function __construct($msg) {
		if ($msg != "") {
			echo "<script>" .
					"alert('".$msg."')" .
					"</script>";
		}
	}
	 	
}
?>
