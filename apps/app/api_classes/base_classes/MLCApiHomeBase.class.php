<?php
class MLCApiHomeBase extends MLCApiClassBase{
	public function __construct(){
		MLCApiAuthDriver::Authenticate(false);
	}
	
    public function AWSInstance(){
        return new MLCApiAWSInstance();
    }
    
    public function MDEApp(){
        return new MLCApiMDEApp();
    }
    
    public function MDEAsset(){
        return new MLCApiMDEAsset();
    }
    
    public function MDEBuild(){
        return new MLCApiMDEBuild();
    }
    
    public function MDEBuildAssembly(){
        return new MLCApiMDEBuildAssembly();
    }
    
    public function MDEThought(){
        return new MLCApiMDEThought();
    }
    
}

MLCApplicationBase::$arrClassFiles['MLCApiAWSInstance'] = __MODEL_APP_API__ . '/MLCApiAWSInstance.class.php';
MLCApplicationBase::$arrClassFiles['MLCApiAWSInstanceObject'] = __MODEL_APP_API__ . '/MLCApiAWSInstanceObject.class.php';

MLCApplicationBase::$arrClassFiles['MLCApiMDEApp'] = __MODEL_APP_API__ . '/MLCApiMDEApp.class.php';
MLCApplicationBase::$arrClassFiles['MLCApiMDEAppObject'] = __MODEL_APP_API__ . '/MLCApiMDEAppObject.class.php';

MLCApplicationBase::$arrClassFiles['MLCApiMDEAsset'] = __MODEL_APP_API__ . '/MLCApiMDEAsset.class.php';
MLCApplicationBase::$arrClassFiles['MLCApiMDEAssetObject'] = __MODEL_APP_API__ . '/MLCApiMDEAssetObject.class.php';

MLCApplicationBase::$arrClassFiles['MLCApiMDEBuild'] = __MODEL_APP_API__ . '/MLCApiMDEBuild.class.php';
MLCApplicationBase::$arrClassFiles['MLCApiMDEBuildObject'] = __MODEL_APP_API__ . '/MLCApiMDEBuildObject.class.php';

MLCApplicationBase::$arrClassFiles['MLCApiMDEBuildAssembly'] = __MODEL_APP_API__ . '/MLCApiMDEBuildAssembly.class.php';
MLCApplicationBase::$arrClassFiles['MLCApiMDEBuildAssemblyObject'] = __MODEL_APP_API__ . '/MLCApiMDEBuildAssemblyObject.class.php';

MLCApplicationBase::$arrClassFiles['MLCApiMDEThought'] = __MODEL_APP_API__ . '/MLCApiMDEThought.class.php';
MLCApplicationBase::$arrClassFiles['MLCApiMDEThoughtObject'] = __MODEL_APP_API__ . '/MLCApiMDEThoughtObject.class.php';


?>