<?php
 /**
 * Carregamento automático de Classes
 * PHP version 7.0
 * @category Novemax
 * @package  Core
 * @author   Isac Aguiar <isacaguiar@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://www.isacaguiar.com.br
 *
 */
class AutoLoader {
	
	protected $ext;
	protected $prefix;
    protected $sufix;
	
    /**
     * Define o caminho local até a raiz do script
     * @param string $path caminho completo até o script
     */
    public function setPath($path) {
        set_include_path($path);
    }

    /**
     * Define a extensão do arquivo a ser exportado
     * @param string $ext a extensão sem o ponto
     */
    public function setExt($ext) {
        $this->ext='.'.$ext;
    }

    /**
     * Define se havera algo a se colocar antes do nome do arquivo
     * @param string $prefix o que vai antes do nome do arquivo
     */
    public function setPrefix($prefix) {
        $this->prefix=$prefix;
    }

    /**
     * Define se havera algo a se colocar após o nome do arquivo
     * @param string $sufix o que vai após o nome do arquivo
     */
    public function setSufix($sufix)
    {
        $this->sufix=$sufix;
    }

    /**
     * Transforma a classe em caminho até o arquivo correspondente
     * @param string $className caminho completo até o script
     * @return  $fileName: o caminho até o arquivo da classe
     */
    protected function setFilename($className) {
        $className = ltrim($className, "\\");
        $fileName  = "";
        $namespace = "";
        if ($lastNsPos = strrpos($className, "\\")) {
            $namespace = substr($className, 0, $lastNsPos);
            $className = substr($className, $lastNsPos + 1);
            $className = $this->prefix.$className.$this->sufix;
            $fileName  = str_replace("\\", DS, $namespace) . DS;
        }
        $fileName .= str_replace('_', DS, $className) . $this->ext;
        return $fileName;
    }
    
    private function browserDirectory($diretorio) {
		
		if ( !strpos($diretorio, 'lib') ) {
			
    	$dh  = opendir($diretorio);
    	
    	while (false !== ($filename = readdir($dh))) {
			
    		$subDiretorio = $diretorio.DS.$filename;
    		
    		if(is_dir($subDiretorio) && ($filename <> '.' && $filename <> '..' && $filename <> '_notes')) {
    			
    			$this->browserDirectory($subDiretorio);
    			
    		} else if (strstr($filename,".php")) {
				
    			$nm_class = explode(".",$filename);
    			if( !class_exists($nm_class[0]) && !interface_exists($nm_class[0])) {
    				include $subDiretorio;
    			}
    			
			}
    	}
		
		}
    }
	
	private function browserDirectoryOld($diretorio) {
    	$dh  = opendir($diretorio);
    	
    	while (false !== ($filename = readdir($dh))) {
    		$subDiretorio = $diretorio.DS.$filename;
    		
    		if(is_dir($subDiretorio) && ($filename <> '.' && $filename <> '..' && $filename <> '_notes')) {
    			
    			$sub_dh = opendir($subDiretorio);
    			
    			while (false !== ($fl = readdir($sub_dh))) {
    				$subFile = $subDiretorio.DS.$fl;
    				
    				if (strstr($fl,".php") && 
    						(!strstr($fl, 'Config') && !strstr($fl, 'CodeIgniter')) ) {
    					$nm_class = explode(".",$fl);
    					
    					if( !class_exists($nm_class[0]) && !interface_exists($nm_class[0])) {
    						
    						include $subFile;
    					}
    					 
    				}
    				
    			}
    			//$this->browserDirectory($subDiretorio);
    		} 	
    	}
    }
    
    
    /**
     * Carrega arquivos do Framework Novemax
     * @param string $className a classe a se carregar
     */
    public function loadNovemax($className) {
    	$dir = PATH.DS.'src'.DS.'lib'.DS.NOVEMAX;
    	$this->browserDirectoryOld($dir);
    }
    
    /**
     * Carrega as bibliotecas do CodeIgniter
     * @param string $className a classe a se carregar
     */
    public function loadCodeIgniter($className) {
    	
    	$dir = PATH.DS.'src'.DS.'lib'.DS.'codeIgniter-3.1.2';
    	if( !class_exists("CI_Common") ) {
    		include $dir."/core/Common.php";
    	}
    	
    	if( !class_exists("CI_Input") ) {
    		include $dir."/core/Input.php";
    	}
    	if( !class_exists("CI_Log") ) {
    		include $dir."/core/Log.php";
    	}
    	if( !class_exists("CI_Security") ) {
    		include $dir."/core/Security.php";
    	}
    }
    
    /**
     * Carrega as classes do Projeto
     * @param string $className a classe a se carregar
     */
    public function loadProject($className) {
    	$dir = PATH.DS.'src';
    	$this->browserDirectory($dir);    	 
    }
    
    /**
     * Carrega outros arquivos
     * @param string $className a classe a se carregar
     */
    public function load($className) {
        $fileName=$this->setFilename($className);
        $fileName=get_include_path().DS.$fileName;

        if (is_readable($fileName)) {
            include $fileName;
        } else {
            echo $fileName.' não encontrado!';
            echo '<pre>';
            var_dump(debug_backtrace());
            echo '</pre>';
            exit;
        }
    }
	
}
?>



    