<?php
class MDEAppListPanelBase extends MJaxTable{
	public function __construct($objParentControl, $arrMDEApps = array()){
	
		parent::__construct($objParentControl);
		
		$this->SetupCols();
		$this->SetDataEntites($arrMDEApps);
		foreach($this->Rows as $intIndex => $objRow){
			$objRow->AddAction($this, 'objRow_click');
		}

	}
	public function SetupCols(){
		
	    	
	    	$this->AddColumn('idApp','idApp');
	   		
	    	
		
	    	
	    	
	    	$this->AddColumn('namespace','namespace');
	   		
		
	    	
	    	
	    	$this->AddColumn('idAccount','idAccount');
	   		
		
	    	
	    	
	    	$this->AddColumn('shortDesc','shortDesc');
	   		
		
	    	
	    	
	    	$this->AddColumn('creDate','creDate');
	   		
		
	    	
	    	
	    	$this->AddColumn('repoUrl','repoUrl');
	   		
		
	    	
	    	
	    	$this->AddColumn('repoType','repoType');
	   		
		
	    	
	    	
	    	$this->AddColumn('buildHook','buildHook');
	   		
		
	    	
	    	
	    	$this->AddColumn('domain','domain');
	   		
		
	    	
	    	
	    	$this->AddColumn('prefix','prefix');
	   		
		
	    	
	    	
	    	$this->AddColumn('docroot','docroot');
	   		
		
	    	
	    	
	    	$this->AddColumn('idBuildAssembly','idBuildAssembly');
	   		
		
	}
	public function objRow_click($strFomrId, $strControlId, $strActionParameter){

		$this->objForm->Redirect(__ENTITY_MODEL_DIR__ . '/MDEApp/' . $strActionParameter);
	}
	
  	
}
?>