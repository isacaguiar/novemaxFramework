<?php

abstract class AbstractNovemaxAction {
	
	abstract function execute($request);
	
	function location($page) {
		/*echo "<script>
				window.location = '".$page."';
				</script>";*/

	}
	
	function erroPage($page, $erro) {
		echo "<form name='form_erro' type='post' action='$page'>
				<input type='text' name='acao' value='LogarApoloAction'>
				<input type='text' name='erro' value='$erro'>
		      </form>
			    <script>
					document.forms['form_erro'].submit();
				</script>";
	}
	
	function redirectErro($page, $erro, $id) {
		$str = "<form name='form_acao' method='post' action='".$page."'>
				<input type='hidden' name='erro' value='".$erro."'>
				<input type='hidden' name='id' value='".$id."'>
				 </form>
			    <script>
					document.forms['form_acao'].submit();
				</script>";	
		echo $str;
	}
	
	function redirect($page, $acao, $params) {
		$str = "<form name='form_acao' method='post' action='".$page."'>
				<input type='hidden' name='acao' value='".$acao."'>";
		if($params <> null && $params != "" && is_array($params)) {
			for ($i = 0; $i < count($params); $i++) {
				$str .="<input type='hidden' name='".$params[$i]->name."' value='".$params[$i]->value."'>";
			}
		}
		$str .=" </form>
			    <script>
					document.forms['form_acao'].submit();
				</script>";	
		echo $str;
	}
	
	function redirectToLogin($page, $params) {
		$str = "<form name='form_acao' method='post' action='".$page."'>";
				//<input type='hidden' name='erro' value='".$erro."'>";
		if($params != "" && is_array($params)) {
			for ($i = 0; $i < count($params); $i++) {
				$str .="<input type='hidden' name='".$params[$i]->name."' value='".$params[$i]->value."'>";
			}
		}
		$str .=" </form>
			    <script>
					document.forms['form_acao'].submit();
				</script>";	
		echo $str;
	}
	
	function redirectToLogoff($page) {
		$str = "<form name='form_acao' method='post' action='".$page."'></form>
			    <script>
					document.forms['form_acao'].submit();
				</script>";	
		echo $str;
	}

	function erro($erro) {
		global $pgErro;
		echo $pgErro;
		/*
		echo "<form>
				<input type='hidden' name='erro'>
		      </form>
			    <script>
				form = document.forms[0];
				form.action = '".$pagina."';
				form.erro.value = '".$erro."';
				form.submit;
				</script>";
		*/
		echo "<form name>
				<input type='hidden' name='erro'>
		      </form>
			    <script>
				window.parent.location='".$pgErro."?erro=".$erro."'
				</script>";
	}
	
}
?>
