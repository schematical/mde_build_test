<form class="form-horizontal">  
    
    
    
    
    	<legend>
   	 	<?php if($_CONTROL->IsNew()){ ?>
   	 		New
    	<?php }else{ ?>
    		idMDEThought: <?php echo $_CONTROL->intIdMDEThought; ?><br/>
    	<?php } ?>
    	</legend>
	
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->intIdUser->ControlId; ?>">idUser</label>
		<div class='controls'>	      
	      <?php $_CONTROL->intIdUser->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strLine->ControlId; ?>">line</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strLine->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->dttCreDate->ControlId; ?>">creDate</label>
		<div class='controls'>	      
	      <?php $_CONTROL->dttCreDate->Render(); ?>
	    </div>
	</div>
    
    
    
	
	
	 
	 
	<div class="control-group">
		<div class='controls'>
			 <?php $_CONTROL->btnSave->Render(); ?>
			 <?php $_CONTROL->btnDelete->Render(); ?>
	 	</div>
	</div>

</form>