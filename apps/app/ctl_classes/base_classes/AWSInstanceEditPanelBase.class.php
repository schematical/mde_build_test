<?php
class AWSInstanceEditPanelBase extends MJaxPanel{
	protected $objAWSInstance = null;
    
    	
    	public $intIdInstance = null;
   		
    	
	
    	
    	
    	public $strAwsId = null;
   		
	
    	
    	
    	public $strNamespace = null;
   		
	
    	
    	
    	public $strDns = null;
   		
	
    	
    	
    	public $dttCreDate = null;
   		
	
    	
    	
    	public $intIdAccount = null;
   		
	
	
	
	//Regular controls
	
	public $btnSave = null;
	public $btnDelete = null;

	public function __construct($objParentControl, $objAWSInstance = null){
		parent::__construct($objParentControl);
		$this->objAWSInstance = $objAWSInstance;
		
		$this->strTemplate = __VIEW_ACTIVE_APP_DIR__  . '/www/ctl_panels/AWSInstanceEditPanelBase.tpl.php';
		
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
		if(is_null($this->objAWSInstance)){
			$this->btnDelete->Style->Display = 'none';
		}
	
	}
	public function CreateFieldControls(){
	     
	  	
	     
	  	
	  		$this->strAwsId = new MJaxTextBox($this);
	  		$this->strAwsId->Name = 'awsId';
  		
	     
	  	
	  		$this->strNamespace = new MJaxTextBox($this);
	  		$this->strNamespace->Name = 'namespace';
  		
	     
	  	
	  		$this->strDns = new MJaxTextBox($this);
	  		$this->strDns->Name = 'dns';
  		
	     
	  	
	  		$this->dttCreDate = new MJaxTextBox($this);
	  		$this->dttCreDate->Name = 'creDate';
  		
	     
	  	
	  		$this->intIdAccount = new MJaxTextBox($this);
	  		$this->intIdAccount->Name = 'idAccount';
  		
	  
	  if(!is_null($this->objAWSInstance)){
	     
	  	
  		
  			$this->intIdInstance = $this->objAWSInstance->idInstance;
  		
  		
	     
	  	
	  		$this->strAwsId->Text = $this->objAWSInstance->awsId;
  		
  		
  		
	     
	  	
	  		$this->strNamespace->Text = $this->objAWSInstance->namespace;
  		
  		
  		
	     
	  	
	  		$this->strDns->Text = $this->objAWSInstance->dns;
  		
  		
  		
	     
	  	
	  		$this->dttCreDate->Text = $this->objAWSInstance->creDate;
  		
  		
  		
	     
	  	
	  		$this->intIdAccount->Text = $this->objAWSInstance->idAccount;
  		
  		
  		
	  
	  }
	}
	public function CreateReferenceControls(){
	  
	 // if(!is_null($this->objAWSInstance->i)){
	   
	 // }
	}
	
	public function btnSave_click(){
		if(is_null($this->objAWSInstance)){
			//Create a new one
			$this->objAWSInstance = new AWSInstance();
		}

  		  
  		
		  
  		
      	$this->objAWSInstance->awsId = $this->strAwsId->Text;
		
		  
  		
      	$this->objAWSInstance->namespace = $this->strNamespace->Text;
		
		  
  		
      	$this->objAWSInstance->dns = $this->strDns->Text;
		
		  
  		
      	$this->objAWSInstance->creDate = $this->dttCreDate->Text;
		
		  
  		
      	$this->objAWSInstance->idAccount = $this->intIdAccount->Text;
		
		
		$this->objAWSInstance->Save();
  	}
  	public function btnDelete_click(){
  		$this->objAWSInstance->Delete();
  	}
  	public function IsNew(){
  		return is_null($this->objAWSInstance);
  	}
  	
}
?>