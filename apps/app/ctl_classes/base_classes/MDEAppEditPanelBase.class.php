<?php
class MDEAppEditPanelBase extends MJaxPanel{
	protected $objMDEApp = null;
    
    	
    	public $intIdApp = null;
   		
    	
	
    	
    	
    	public $strNamespace = null;
   		
	
    	
    	
    	public $intIdAccount = null;
   		
	
    	
    	
    	public $strShortDesc = null;
   		
	
    	
    	
    	public $dttCreDate = null;
   		
	
    	
    	
    	public $strRepoUrl = null;
   		
	
    	
    	
    	public $strRepoType = null;
   		
	
    	
    	
    	public $strBuildHook = null;
   		
	
    	
    	
    	public $strDomain = null;
   		
	
    	
    	
    	public $strPrefix = null;
   		
	
    	
    	
    	public $strDocroot = null;
   		
	
    	
    	
    	public $intIdBuildAssembly = null;
   		
	
	
	
	//Regular controls
	
	public $btnSave = null;
	public $btnDelete = null;

	public function __construct($objParentControl, $objMDEApp = null){
		parent::__construct($objParentControl);
		$this->objMDEApp = $objMDEApp;
		
		$this->strTemplate = __VIEW_ACTIVE_APP_DIR__  . '/www/ctl_panels/MDEAppEditPanelBase.tpl.php';
		
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
		if(is_null($this->objMDEApp)){
			$this->btnDelete->Style->Display = 'none';
		}
	
	}
	public function CreateFieldControls(){
	     
	  	
	     
	  	
	  		$this->strNamespace = new MJaxTextBox($this);
	  		$this->strNamespace->Name = 'namespace';
  		
	     
	  	
	  		$this->intIdAccount = new MJaxTextBox($this);
	  		$this->intIdAccount->Name = 'idAccount';
  		
	     
	  	
	  		$this->strShortDesc = new MJaxTextBox($this);
	  		$this->strShortDesc->Name = 'shortDesc';
  		
	     
	  	
	  		$this->dttCreDate = new MJaxTextBox($this);
	  		$this->dttCreDate->Name = 'creDate';
  		
	     
	  	
	  		$this->strRepoUrl = new MJaxTextBox($this);
	  		$this->strRepoUrl->Name = 'repoUrl';
  		
	     
	  	
	  		$this->strRepoType = new MJaxTextBox($this);
	  		$this->strRepoType->Name = 'repoType';
  		
	     
	  	
	  		$this->strBuildHook = new MJaxTextBox($this);
	  		$this->strBuildHook->Name = 'buildHook';
  		
	     
	  	
	  		$this->strDomain = new MJaxTextBox($this);
	  		$this->strDomain->Name = 'domain';
  		
	     
	  	
	  		$this->strPrefix = new MJaxTextBox($this);
	  		$this->strPrefix->Name = 'prefix';
  		
	     
	  	
	  		$this->strDocroot = new MJaxTextBox($this);
	  		$this->strDocroot->Name = 'docroot';
  		
	     
	  	
	  		$this->intIdBuildAssembly = new MJaxTextBox($this);
	  		$this->intIdBuildAssembly->Name = 'idBuildAssembly';
  		
	  
	  if(!is_null($this->objMDEApp)){
	     
	  	
  		
  			$this->intIdApp = $this->objMDEApp->idApp;
  		
  		
	     
	  	
	  		$this->strNamespace->Text = $this->objMDEApp->namespace;
  		
  		
  		
	     
	  	
	  		$this->intIdAccount->Text = $this->objMDEApp->idAccount;
  		
  		
  		
	     
	  	
	  		$this->strShortDesc->Text = $this->objMDEApp->shortDesc;
  		
  		
  		
	     
	  	
	  		$this->dttCreDate->Text = $this->objMDEApp->creDate;
  		
  		
  		
	     
	  	
	  		$this->strRepoUrl->Text = $this->objMDEApp->repoUrl;
  		
  		
  		
	     
	  	
	  		$this->strRepoType->Text = $this->objMDEApp->repoType;
  		
  		
  		
	     
	  	
	  		$this->strBuildHook->Text = $this->objMDEApp->buildHook;
  		
  		
  		
	     
	  	
	  		$this->strDomain->Text = $this->objMDEApp->domain;
  		
  		
  		
	     
	  	
	  		$this->strPrefix->Text = $this->objMDEApp->prefix;
  		
  		
  		
	     
	  	
	  		$this->strDocroot->Text = $this->objMDEApp->docroot;
  		
  		
  		
	     
	  	
	  		$this->intIdBuildAssembly->Text = $this->objMDEApp->idBuildAssembly;
  		
  		
  		
	  
	  }
	}
	public function CreateReferenceControls(){
	  
	 // if(!is_null($this->objMDEApp->i)){
	   
	 // }
	}
	
	public function btnSave_click(){
		if(is_null($this->objMDEApp)){
			//Create a new one
			$this->objMDEApp = new MDEApp();
		}

  		  
  		
		  
  		
      	$this->objMDEApp->namespace = $this->strNamespace->Text;
		
		  
  		
      	$this->objMDEApp->idAccount = $this->intIdAccount->Text;
		
		  
  		
      	$this->objMDEApp->shortDesc = $this->strShortDesc->Text;
		
		  
  		
      	$this->objMDEApp->creDate = $this->dttCreDate->Text;
		
		  
  		
      	$this->objMDEApp->repoUrl = $this->strRepoUrl->Text;
		
		  
  		
      	$this->objMDEApp->repoType = $this->strRepoType->Text;
		
		  
  		
      	$this->objMDEApp->buildHook = $this->strBuildHook->Text;
		
		  
  		
      	$this->objMDEApp->domain = $this->strDomain->Text;
		
		  
  		
      	$this->objMDEApp->prefix = $this->strPrefix->Text;
		
		  
  		
      	$this->objMDEApp->docroot = $this->strDocroot->Text;
		
		  
  		
      	$this->objMDEApp->idBuildAssembly = $this->intIdBuildAssembly->Text;
		
		
		$this->objMDEApp->Save();
  	}
  	public function btnDelete_click(){
  		$this->objMDEApp->Delete();
  	}
  	public function IsNew(){
  		return is_null($this->objMDEApp);
  	}
  	
}
?>