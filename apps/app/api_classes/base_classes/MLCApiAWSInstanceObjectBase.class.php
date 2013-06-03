<?php
class MLCApiAWSInstanceObjectBase extends MLCApiObjectBase{
   
    protected $strClassName = 'AWSInstance';
	public function  __call($strName, $arrArguments) {
    		switch($strName){
				
				
				default:
					return parent::__call($strName, $arrArguments);
				
    		}
	}
    
   
   
   	
}