<form class="form-horizontal">  
    
    
    
    
    	<legend>
   	 	<?php if($_CONTROL->IsNew()){ ?>
   	 		New
    	<?php }else{ ?>
    		idApp: <?php echo $_CONTROL->intIdApp; ?><br/>
    	<?php } ?>
    	</legend>
	
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strNamespace->ControlId; ?>">namespace</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strNamespace->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->intIdAccount->ControlId; ?>">idAccount</label>
		<div class='controls'>	      
	      <?php $_CONTROL->intIdAccount->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strShortDesc->ControlId; ?>">shortDesc</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strShortDesc->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->dttCreDate->ControlId; ?>">creDate</label>
		<div class='controls'>	      
	      <?php $_CONTROL->dttCreDate->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strRepoUrl->ControlId; ?>">repoUrl</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strRepoUrl->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strRepoType->ControlId; ?>">repoType</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strRepoType->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strBuildHook->ControlId; ?>">buildHook</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strBuildHook->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strDomain->ControlId; ?>">domain</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strDomain->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strPrefix->ControlId; ?>">prefix</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strPrefix->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->strDocroot->ControlId; ?>">docroot</label>
		<div class='controls'>	      
	      <?php $_CONTROL->strDocroot->Render(); ?>
	    </div>
	</div>
    
    
    
	
    
   
	
	 <div class="control-group">
		<label class="control-label" class="control-label" for="<?php echo $_CONTROL->intIdBuildAssembly->ControlId; ?>">idBuildAssembly</label>
		<div class='controls'>	      
	      <?php $_CONTROL->intIdBuildAssembly->Render(); ?>
	    </div>
	</div>
    
    
    
	
	
	 
	 
	<div class="control-group">
		<div class='controls'>
			 <?php $_CONTROL->btnSave->Render(); ?>
			 <?php $_CONTROL->btnDelete->Render(); ?>
	 	</div>
	</div>

</form>