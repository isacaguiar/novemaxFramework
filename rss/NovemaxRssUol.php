<?php
class NovemaxRssUol implements NovemaxRss {
	
	function read($link){
		$this->primeiro($link);
	}
	
	function primeiro($link) {
		$xmlDoc = new DOMDocument();
		$xmlDoc->load($link);

		$x = $xmlDoc->documentElement;
		$count=0;
		foreach ($x->childNodes AS $item) {
		 
			
			foreach ($item->childNodes AS $item2) {
				if($item2->nodeName == "item" ) {
					print "-----------------------";
					echo "<br>";
					foreach ($item2->childNodes AS $item3) {
						//print $item3->nodeName . " = " . $item3->nodeValue . "<br />";
						echo $item3->nodeValue . "<br />";
					}
				}
		
			}
		
		}
	}
}
?>