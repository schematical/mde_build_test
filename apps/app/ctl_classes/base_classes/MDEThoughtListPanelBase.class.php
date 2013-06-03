<?php
class MDEThoughtListPanelBase extends MJaxTable{
	public function __construct($objParentControl, $arrMDEThoughts = array()){
	
		parent::__construct($objParentControl);
		
		$this->SetupCols();
		$this->SetDataEntites($arrMDEThoughts);
		foreach($this->Rows as $intIndex => $objRow){
			$objRow->AddAction($this, 'objRow_click');
		}

	}
	public function SetupCols(){
		
	    	
	    	$this->AddColumn('idMDEThought','idMDEThought');
	   		
	    	
		
	    	
	    	
	    	$this->AddColumn('idUser','idUser');
	   		
		
	    	
	    	
	    	$this->AddColumn('line','line');
	   		
		
	    	
	    	
	    	$this->AddColumn('creDate','creDate');
	   		
		
	}
	public function objRow_click($strFomrId, $strControlId, $strActionParameter){

		$this->objForm->Redirect(__ENTITY_MODEL_DIR__ . '/MDEThought/' . $strActionParameter);
	}
	
  	
}
?>