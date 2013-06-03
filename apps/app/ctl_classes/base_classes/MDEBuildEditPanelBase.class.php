<?php
class MDEBuildEditPanelBase extends MJaxPanel{
	protected $objMDEBuild = null;
    
    	
    	public $intIdBuild = null;
   		
    	
	
    	
    	
    	public $intIdApp = null;
   		
	
    	
    	
    	public $intIdUser = null;
   		
	
    	
    	
    	public $dttCreDate = null;
   		
	
    	
    	
    	public $strLog = null;
   		
	
    	
    	
    	public $intIdBuildStatus = null;
   		
	
    	
    	
    	public $strS3Loc = null;
   		
	
    	
    	
    	public $strIdAddress = null;
   		
	
	
	
	//Regular controls
	
	public $btnSave = null;
	public $btnDelete = null;

	public function __construct($objParentControl, $objMDEBuild = null){
		parent::__construct($objParentControl);
		$this->objMDEBuild = $objMDEBuild;
		
		$this->strTemplate = __VIEW_ACTIVE_APP_DIR__  . '/www/ctl_panels/MDEBuildEditPanelBase.tpl.php';
		
		$this->CreateFieldControls();
		$this->CreateContentControls();
		$this->CreateReferenceControls();
		
	}
	public function CreateContentControls(){
		$this->btnSave = new MJaxButton($this);
		$this->btnSave->Text = 'Save';
		$this->btnSave->AddAction(new MJaxClickEvent(), new MJaxServerControlAction($this, 'btnSave_click'));
		
		
		$this->btnDelete = new MJaxButton($this);
		$this->btnDelete->Text = 'Delete';
		$this->btnDelete->AddAction(new MJaxClickEvent(), new MJaxServerControlAction($this, 'btnDelete_click'));
		if(is_null($this->objMDEBuild)){
			$this->btnDelete->Style->Display = 'none';
		}
	
	}
	public function CreateFieldControls(){
	     
	  	
	     
	  	
	  		$this->intIdApp = new MJaxTextBox($this);
	  		$this->intIdApp->Name = 'idApp';
  		
	     
	  	
	  		$this->intIdUser = new MJaxTextBox($this);
	  		$this->intIdUser->Name = 'idUser';
  		
	     
	  	
	  		$this->dttCreDate = new MJaxTextBox($this);
	  		$this->dttCreDate->Name = 'creDate';
  		
	     
	  	
	  		$this->strLog = new MJaxTextBox($this);
	  		$this->strLog->Name = 'log';
  		
	     
	  	
	  		$this->intIdBuildStatus = new MJaxTextBox($this);
	  		$this->intIdBuildStatus->Name = 'idBuildStatus';
  		
	     
	  	
	  		$this->strS3Loc = new MJaxTextBox($this);
	  		$this->strS3Loc->Name = 's3Loc';
  		
	     
	  	
	  		$this->strIdAddress = new MJaxTextBox($this);
	  		$this->strIdAddress->Name = 'idAddress';
  		
	  
	  if(!is_null($this->objMDEBuild)){
	     
	  	
  		
  			$this->intIdBuild = $this->objMDEBuild->idBuild;
  		
  		
	     
	  	
	  		$this->intIdApp->Text = $this->objMDEBuild->idApp;
  		
  		
  		
	     
	  	
	  		$this->intIdUser->Text = $this->objMDEBuild->idUser;
  		
  		
  		
	     
	  	
	  		$this->dttCreDate->Text = $this->objMDEBuild->creDate;
  		
  		
  		
	     
	  	
	  		$this->strLog->Text = $this->objMDEBuild->log;
  		
  		
  		
	     
	  	
	  		$this->intIdBuildStatus->Text = $this->objMDEBuild->idBuildStatus;
  		
  		
  		
	     
	  	
	  		$this->strS3Loc->Text = $this->objMDEBuild->s3Loc;
  		
  		
  		
	     
	  	
	  		$this->strIdAddress->Text = $this->objMDEBuild->idAddress;
  		
  		
  		
	  
	  }
	}
	public function CreateReferenceControls(){
	  
	 // if(!is_null($this->objMDEBuild->i)){
	   
	 // }
	}
	
	public function btnSave_click(){
		if(is_null($this->objMDEBuild)){
			//Create a new one
			$this->objMDEBuild = new MDEBuild();
		}

  		  
  		
		  
  		
      	$this->objMDEBuild->idApp = $this->intIdApp->Text;
		
		  
  		
      	$this->objMDEBuild->idUser = $this->intIdUser->Text;
		
		  
  		
      	$this->objMDEBuild->creDate = $this->dttCreDate->Text;
		
		  
  		
      	$this->objMDEBuild->log = $this->strLog->Text;
		
		  
  		
      	$this->objMDEBuild->idBuildStatus = $this->intIdBuildStatus->Text;
		
		  
  		
      	$this->objMDEBuild->s3Loc = $this->strS3Loc->Text;
		
		  
  		
      	$this->objMDEBuild->idAddress = $this->strIdAddress->Text;
		
		
		$this->objMDEBuild->Save();
  	}
  	public function btnDelete_click(){
  		$this->objMDEBuild->Delete();
  	}
  	public function IsNew(){
  		return is_null($this->objMDEBuild);
  	}
  	
}
?>