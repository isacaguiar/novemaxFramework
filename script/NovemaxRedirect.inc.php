<?php
/**
 * Created on 07/01/2011
 * @author Isa Aguiar
 */
class NovemaxRedirect {

	public function __construct($pagina) {
		$mensagem 			=	"<script language='javascript'>";

		if ($pagina!=''){	

			$mensagem = $mensagem."window.parent.self.location ='".$pagina."'"; 	

		}

		$mensagem 			=	$mensagem."</script>";	

		echo $mensagem;
	}
	
	 	
}
?>
