<form class="form-horizontal">  
    
    
    
    
    	<legend>
   	 	<?php if($_CONTROL->IsNew()){ ?>
   	 		New
    	<?php }else{ ?>
    		idBuildAssembly: <?php echo $_CONTROL->intIdBuildAssembly; ?><br/>
    	<?php } ?>
    	</legend>
	
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strShortDesc->ControlId; ?>">shortDesc</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strShortDesc->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->intIdAccount->ControlId; ?>">idAccount</label>
		<div class='controls'>	      
	      <?php $_CONTROL->intIdAccount->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strLongDesc->ControlId; ?>">longDesc</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strLongDesc->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->dttCreDate->ControlId; ?>">creDate</label>
		<div class='controls'>	      
	      <?php $_CONTROL->dttCreDate->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->intIdAsset->ControlId; ?>">idAsset</label>
		<div class='controls'>	      
	      <?php $_CONTROL->intIdAsset->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->intFeatured->ControlId; ?>">featured</label>
		<div class='controls'>	      
	      <?php $_CONTROL->intFeatured->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strIdAppBase->ControlId; ?>">idAppBase</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strIdAppBase->Render(); ?>
	    </div>
	</div>
    
    
    
	
	
	 
	 
	<div class="control-group">
		<div class='controls'>
			 <?php $_CONTROL->btnSave->Render(); ?>
			 <?php $_CONTROL->btnDelete->Render(); ?>
	 	</div>
	</div>

</form>