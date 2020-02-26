<?php
class NovemaxApplicationException extends Exception {
	function mostraErro($erro){
		global $caminho;
		$erro = "<table border='0' bgcolor='#F2F2F2' cellspacing='6' cellpadding='0' 
						width='90%' align='center' class='erro_bd' style='font:20px bold Arial,Verdana;'>
						<tr>
								<td width='5%'><img src='".$caminho."recursos/imagens/logo.jpg' ></td>
								<td width='95%' align='center' style='background:#e4e4e4'>".$erro.".</td>
						</tr>
				</table>";
		return $erro;
	}
}
?>