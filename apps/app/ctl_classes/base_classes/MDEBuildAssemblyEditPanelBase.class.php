<?php
class MDEBuildAssemblyEditPanelBase extends MJaxPanel{
	protected $objMDEBuildAssembly = null;
    
    	
    	public $intIdBuildAssembly = null;
   		
    	
	
    	
    	
    	public $strShortDesc = null;
   		
	
    	
    	
    	public $intIdAccount = null;
   		
	
    	
    	
    	public $strLongDesc = null;
   		
	
    	
    	
    	public $dttCreDate = null;
   		
	
    	
    	
    	public $intIdAsset = null;
   		
	
    	
    	
    	public $intFeatured = null;
   		
	
    	
    	
    	public $strIdAppBase = null;
   		
	
	
	
	//Regular controls
	
	public $btnSave = null;
	public $btnDelete = null;

	public function __construct($objParentControl, $objMDEBuildAssembly = null){
		parent::__construct($objParentControl);
		$this->objMDEBuildAssembly = $objMDEBuildAssembly;
		
		$this->strTemplate = __VIEW_ACTIVE_APP_DIR__  . '/www/ctl_panels/MDEBuildAssemblyEditPanelBase.tpl.php';
		
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
		if(is_null($this->objMDEBuildAssembly)){
			$this->btnDelete->Style->Display = 'none';
		}
	
	}
	public function CreateFieldControls(){
	     
	  	
	     
	  	
	  		$this->strShortDesc = new MJaxTextBox($this);
	  		$this->strShortDesc->Name = 'shortDesc';
  		
	     
	  	
	  		$this->intIdAccount = new MJaxTextBox($this);
	  		$this->intIdAccount->Name = 'idAccount';
  		
	     
	  	
	  		$this->strLongDesc = new MJaxTextBox($this);
	  		$this->strLongDesc->Name = 'longDesc';
  		
	     
	  	
	  		$this->dttCreDate = new MJaxTextBox($this);
	  		$this->dttCreDate->Name = 'creDate';
  		
	     
	  	
	  		$this->intIdAsset = new MJaxTextBox($this);
	  		$this->intIdAsset->Name = 'idAsset';
  		
	     
	  	
	  		$this->intFeatured = new MJaxTextBox($this);
	  		$this->intFeatured->Name = 'featured';
  		
	     
	  	
	  		$this->strIdAppBase = new MJaxTextBox($this);
	  		$this->strIdAppBase->Name = 'idAppBase';
  		
	  
	  if(!is_null($this->objMDEBuildAssembly)){
	     
	  	
  		
  			$this->intIdBuildAssembly = $this->objMDEBuildAssembly->idBuildAssembly;
  		
  		
	     
	  	
	  		$this->strShortDesc->Text = $this->objMDEBuildAssembly->shortDesc;
  		
  		
  		
	     
	  	
	  		$this->intIdAccount->Text = $this->objMDEBuildAssembly->idAccount;
  		
  		
  		
	     
	  	
	  		$this->strLongDesc->Text = $this->objMDEBuildAssembly->longDesc;
  		
  		
  		
	     
	  	
	  		$this->dttCreDate->Text = $this->objMDEBuildAssembly->creDate;
  		
  		
  		
	     
	  	
	  		$this->intIdAsset->Text = $this->objMDEBuildAssembly->idAsset;
  		
  		
  		
	     
	  	
	  		$this->intFeatured->Text = $this->objMDEBuildAssembly->featured;
  		
  		
  		
	     
	  	
	  		$this->strIdAppBase->Text = $this->objMDEBuildAssembly->idAppBase;
  		
  		
  		
	  
	  }
	}
	public function CreateReferenceControls(){
	  
	 // if(!is_null($this->objMDEBuildAssembly->i)){
	   
	 // }
	}
	
	public function btnSave_click(){
		if(is_null($this->objMDEBuildAssembly)){
			//Create a new one
			$this->objMDEBuildAssembly = new MDEBuildAssembly();
		}

  		  
  		
		  
  		
      	$this->objMDEBuildAssembly->shortDesc = $this->strShortDesc->Text;
		
		  
  		
      	$this->objMDEBuildAssembly->idAccount = $this->intIdAccount->Text;
		
		  
  		
      	$this->objMDEBuildAssembly->longDesc = $this->strLongDesc->Text;
		
		  
  		
      	$this->objMDEBuildAssembly->creDate = $this->dttCreDate->Text;
		
		  
  		
      	$this->objMDEBuildAssembly->idAsset = $this->intIdAsset->Text;
		
		  
  		
      	$this->objMDEBuildAssembly->featured = $this->intFeatured->Text;
		
		  
  		
      	$this->objMDEBuildAssembly->idAppBase = $this->strIdAppBase->Text;
		
		
		$this->objMDEBuildAssembly->Save();
  	}
  	public function btnDelete_click(){
  		$this->objMDEBuildAssembly->Delete();
  	}
  	public function IsNew(){
  		return is_null($this->objMDEBuildAssembly);
  	}
  	
}
?>