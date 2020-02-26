<?php
class CleanAction extends AbstractNovemaxAction {
	
	function execute($nRequest) {
		global $caminho;
		try {
			
		} catch (NovemaxApplicationException $e) {
			$nRequest->setError($e);
			$this->redirectErro(BASICPATH.'erro.php', $e->getMessage(),null);
		} catch (NovemaxSystemException $e) {
			$nRequest->setError($e);
			$this->redirectErro(BASICPATH.'erro.php', $e->getMessage(),null);
		}
	}
}
?>