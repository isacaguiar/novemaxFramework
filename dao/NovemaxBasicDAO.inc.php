<?php
/**
 * 
 */
abstract class NovemaxBasicDAO {
	
	protected $conn;
	
	abstract function getTable();
	
	abstract function mountVO($vo);
	
	function getConn() {
		return $this->conn->connection;
	}
	
	function setConn($conn) {
		$this->conn = $conn;
	}	
	
	function toUtf8(&$item) {
		return iconv("iso-8859-1","utf-8",$item);
	}
	
	function utf8($str) {
		//echo str_replace('º', '�', $str);
		//htmlentities($tempVO[$i], ENT_QUOTES);
		//return htmlspecialchars(str_replace('º', '�', $str),ENT_QUOTES,'UTF-8');  
		//return str_replace('º', '�', $str);
		//return iconv("iso-8859-1","utf-8",$str);
		//return iconv('UTF-8', 'ISO-8859-1//TRANSLIT//IGNORE', $str);
		return iconv('UTF-8', 'ISO-8859-1', $str);
	}
	
	function getAll() {
		try {
			$sql = 'SELECT * FROM '.$this->getTable();
			$stmt = $this->getConn()->prepare($sql);
			$stmt->execute();
			
			$list[] = null;
			while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
				$list[] = $this->mountVO($row);
			}
			return $list;
		} catch (PDOException $e) {
			throw new NovemaxApplicationException($e);
		}  catch (Exception $e) {
			throw new NovemaxApplicationException($e);
		}
	}
	
}
?>