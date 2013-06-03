<?php
class MLCApiMDEBuildAssemblyObjectBase extends MLCApiObjectBase{
   
    protected $strClassName = 'MDEBuildAssembly';
	public function  __call($strName, $arrArguments) {
    		switch($strName){
				
				
				default:
					return parent::__call($strName, $arrArguments);
				
    		}
	}
    
   
   
   	
}