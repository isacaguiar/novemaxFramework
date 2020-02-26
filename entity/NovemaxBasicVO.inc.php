<?php
class NovemaxBasicVO {
	
	public $id;
	
	function __toString() {
		return $this->id;
    }
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getId() {
		return $this->id;
	}
	
}
?>