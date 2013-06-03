<?php
class MDEAssetEditPanelBase extends MJaxPanel{
	protected $objMDEAsset = null;
    
    	
    	public $intIdAsset = null;
   		
    	
	
    	
    	
    	public $strS3Loc = null;
   		
	
    	
    	
    	public $dttCreDate = null;
   		
	
    	
    	
    	public $intIdUser = null;
   		
	
    	
    	
    	public $intIdApp = null;
   		
	
    	
    	
    	public $strType = null;
   		
	
    	
    	
    	public $strShortDesc = null;
   		
	
    	
    	
    	public $strLongDesc = null;
   		
	
    	
    	
    	public $strNamespace = null;
   		
	
    	
    	
    	public $strSuccess = null;
   		
	
    	
    	
    	public $dttDelDate = null;
   		
	
    	
    	
    	public $strData = null;
   		
	
	
	
	//Regular controls
	
	public $btnSave = null;
	public $btnDelete = null;

	public function __construct($objParentControl, $objMDEAsset = null){
		parent::__construct($objParentControl);
		$this->objMDEAsset = $objMDEAsset;
		
		$this->strTemplate = __VIEW_ACTIVE_APP_DIR__  . '/www/ctl_panels/MDEAssetEditPanelBase.tpl.php';
		
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
		if(is_null($this->objMDEAsset)){
			$this->btnDelete->Style->Display = 'none';
		}
	
	}
	public function CreateFieldControls(){
	     
	  	
	     
	  	
	  		$this->strS3Loc = new MJaxTextBox($this);
	  		$this->strS3Loc->Name = 's3Loc';
  		
	     
	  	
	  		$this->dttCreDate = new MJaxTextBox($this);
	  		$this->dttCreDate->Name = 'creDate';
  		
	     
	  	
	  		$this->intIdUser = new MJaxTextBox($this);
	  		$this->intIdUser->Name = 'idUser';
  		
	     
	  	
	  		$this->intIdApp = new MJaxTextBox($this);
	  		$this->intIdApp->Name = 'idApp';
  		
	     
	  	
	  		$this->strType = new MJaxTextBox($this);
	  		$this->strType->Name = 'type';
  		
	     
	  	
	  		$this->strShortDesc = new MJaxTextBox($this);
	  		$this->strShortDesc->Name = 'shortDesc';
  		
	     
	  	
	  		$this->strLongDesc = new MJaxTextBox($this);
	  		$this->strLongDesc->Name = 'longDesc';
  		
	     
	  	
	  		$this->strNamespace = new MJaxTextBox($this);
	  		$this->strNamespace->Name = 'namespace';
  		
	     
	  	
	  		$this->strSuccess = new MJaxTextBox($this);
	  		$this->strSuccess->Name = 'success';
  		
	     
	  	
	  		$this->dttDelDate = new MJaxTextBox($this);
	  		$this->dttDelDate->Name = 'delDate';
  		
	     
	  	
	  		$this->strData = new MJaxTextBox($this);
	  		$this->strData->Name = 'data';
  		
	  
	  if(!is_null($this->objMDEAsset)){
	     
	  	
  		
  			$this->intIdAsset = $this->objMDEAsset->idAsset;
  		
  		
	     
	  	
	  		$this->strS3Loc->Text = $this->objMDEAsset->s3Loc;
  		
  		
  		
	     
	  	
	  		$this->dttCreDate->Text = $this->objMDEAsset->creDate;
  		
  		
  		
	     
	  	
	  		$this->intIdUser->Text = $this->objMDEAsset->idUser;
  		
  		
  		
	     
	  	
	  		$this->intIdApp->Text = $this->objMDEAsset->idApp;
  		
  		
  		
	     
	  	
	  		$this->strType->Text = $this->objMDEAsset->type;
  		
  		
  		
	     
	  	
	  		$this->strShortDesc->Text = $this->objMDEAsset->shortDesc;
  		
  		
  		
	     
	  	
	  		$this->strLongDesc->Text = $this->objMDEAsset->longDesc;
  		
  		
  		
	     
	  	
	  		$this->strNamespace->Text = $this->objMDEAsset->namespace;
  		
  		
  		
	     
	  	
	  		$this->strSuccess->Text = $this->objMDEAsset->success;
  		
  		
  		
	     
	  	
	  		$this->dttDelDate->Text = $this->objMDEAsset->delDate;
  		
  		
  		
	     
	  	
	  		$this->strData->Text = $this->objMDEAsset->data;
  		
  		
  		
	  
	  }
	}
	public function CreateReferenceControls(){
	  
	 // if(!is_null($this->objMDEAsset->i)){
	   
	 // }
	}
	
	public function btnSave_click(){
		if(is_null($this->objMDEAsset)){
			//Create a new one
			$this->objMDEAsset = new MDEAsset();
		}

  		  
  		
		  
  		
      	$this->objMDEAsset->s3Loc = $this->strS3Loc->Text;
		
		  
  		
      	$this->objMDEAsset->creDate = $this->dttCreDate->Text;
		
		  
  		
      	$this->objMDEAsset->idUser = $this->intIdUser->Text;
		
		  
  		
      	$this->objMDEAsset->idApp = $this->intIdApp->Text;
		
		  
  		
      	$this->objMDEAsset->type = $this->strType->Text;
		
		  
  		
      	$this->objMDEAsset->shortDesc = $this->strShortDesc->Text;
		
		  
  		
      	$this->objMDEAsset->longDesc = $this->strLongDesc->Text;
		
		  
  		
      	$this->objMDEAsset->namespace = $this->strNamespace->Text;
		
		  
  		
      	$this->objMDEAsset->success = $this->strSuccess->Text;
		
		  
  		
      	$this->objMDEAsset->delDate = $this->dttDelDate->Text;
		
		  
  		
      	$this->objMDEAsset->data = $this->strData->Text;
		
		
		$this->objMDEAsset->Save();
  	}
  	public function btnDelete_click(){
  		$this->objMDEAsset->Delete();
  	}
  	public function IsNew(){
  		return is_null($this->objMDEAsset);
  	}
  	
}
?>