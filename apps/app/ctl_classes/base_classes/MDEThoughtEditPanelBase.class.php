<?php
class MDEThoughtEditPanelBase extends MJaxPanel{
	protected $objMDEThought = null;
    
    	
    	public $intIdMDEThought = null;
   		
    	
	
    	
    	
    	public $intIdUser = null;
   		
	
    	
    	
    	public $strLine = null;
   		
	
    	
    	
    	public $dttCreDate = null;
   		
	
	
	
	//Regular controls
	
	public $btnSave = null;
	public $btnDelete = null;

	public function __construct($objParentControl, $objMDEThought = null){
		parent::__construct($objParentControl);
		$this->objMDEThought = $objMDEThought;
		
		$this->strTemplate = __VIEW_ACTIVE_APP_DIR__  . '/www/ctl_panels/MDEThoughtEditPanelBase.tpl.php';
		
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
		if(is_null($this->objMDEThought)){
			$this->btnDelete->Style->Display = 'none';
		}
	
	}
	public function CreateFieldControls(){
	     
	  	
	     
	  	
	  		$this->intIdUser = new MJaxTextBox($this);
	  		$this->intIdUser->Name = 'idUser';
  		
	     
	  	
	  		$this->strLine = new MJaxTextBox($this);
	  		$this->strLine->Name = 'line';
  		
	     
	  	
	  		$this->dttCreDate = new MJaxTextBox($this);
	  		$this->dttCreDate->Name = 'creDate';
  		
	  
	  if(!is_null($this->objMDEThought)){
	     
	  	
  		
  			$this->intIdMDEThought = $this->objMDEThought->idMDEThought;
  		
  		
	     
	  	
	  		$this->intIdUser->Text = $this->objMDEThought->idUser;
  		
  		
  		
	     
	  	
	  		$this->strLine->Text = $this->objMDEThought->line;
  		
  		
  		
	     
	  	
	  		$this->dttCreDate->Text = $this->objMDEThought->creDate;
  		
  		
  		
	  
	  }
	}
	public function CreateReferenceControls(){
	  
	 // if(!is_null($this->objMDEThought->i)){
	   
	 // }
	}
	
	public function btnSave_click(){
		if(is_null($this->objMDEThought)){
			//Create a new one
			$this->objMDEThought = new MDEThought();
		}

  		  
  		
		  
  		
      	$this->objMDEThought->idUser = $this->intIdUser->Text;
		
		  
  		
      	$this->objMDEThought->line = $this->strLine->Text;
		
		  
  		
      	$this->objMDEThought->creDate = $this->dttCreDate->Text;
		
		
		$this->objMDEThought->Save();
  	}
  	public function btnDelete_click(){
  		$this->objMDEThought->Delete();
  	}
  	public function IsNew(){
  		return is_null($this->objMDEThought);
  	}
  	
}
?>