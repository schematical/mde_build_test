<?php
class MLCApiMDEBuildBase extends MLCApiClassBase{
	protected $strClassName = 'MDEBuild';
	
	public function  __call($strName, $arrArguments) {
       
		$arrReturn = array();
		if(is_numeric($strName){
            $objMDEBuild = MDEBuild::LoadById($strName);
        }else{
            $objMDEBuild = null;
        }

      
        if(!is_null($objMDEBuild)){
        	return new MLCApiMDEBuildObject($objMDEBuild);
        }else{
            throw new MLCApiException("No MDEBuild found with the data you submitted");
        }
        
     }

    	
	public function Query(){
	 	//Will need to accept QS Pramaeters of facebook, twitter, google
	}
}
?>