<?php
abstract class NovemaxBasicBO {
	
	function getAll() {
		return $this->getDAO()->getAll();
	}
	
	function getById($vo) {
		return $this->getDAO()->getById($vo);
	}
	
	function insert($vo) {
		return $this->getDAO()->insert($vo);
	}
	
}
?>