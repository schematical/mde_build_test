<form class="form-horizontal">  
    
    
    
    
    	<legend>
   	 	<?php if($_CONTROL->IsNew()){ ?>
   	 		New
    	<?php }else{ ?>
    		idAsset: <?php echo $_CONTROL->intIdAsset; ?><br/>
    	<?php } ?>
    	</legend>
	
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strS3Loc->ControlId; ?>">s3Loc</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strS3Loc->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->dttCreDate->ControlId; ?>">creDate</label>
		<div class='controls'>	      
	      <?php $_CONTROL->dttCreDate->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->intIdUser->ControlId; ?>">idUser</label>
		<div class='controls'>	      
	      <?php $_CONTROL->intIdUser->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->intIdApp->ControlId; ?>">idApp</label>
		<div class='controls'>	      
	      <?php $_CONTROL->intIdApp->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strType->ControlId; ?>">type</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strType->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strShortDesc->ControlId; ?>">shortDesc</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strShortDesc->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strLongDesc->ControlId; ?>">longDesc</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strLongDesc->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strNamespace->ControlId; ?>">namespace</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strNamespace->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strSuccess->ControlId; ?>">success</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strSuccess->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->dttDelDate->ControlId; ?>">delDate</label>
		<div class='controls'>	      
	      <?php $_CONTROL->dttDelDate->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strData->ControlId; ?>">data</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strData->Render(); ?>
	    </div>
	</div>
    
    
    
	
	
	 
	 
	<div class="control-group">
		<div class='controls'>
			 <?php $_CONTROL->btnSave->Render(); ?>
			 <?php $_CONTROL->btnDelete->Render(); ?>
	 	</div>
	</div>

</form>