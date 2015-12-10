<?php
require_once BASE_PATH.'model/user/class.user.php';

class UserFunct {
	
	/**
	*   Log Variable Declaration
	*/
	
	private $emergency			= EMERGENCY_ACTION_REQUIRED;
	private $alert				= ALERT; 
	private $errors				= ERRORS;
	private $warnings			= WARNINGS;
	private $notices			= NOTICES;
	private $information		= INFORMATION;	
	public  $errorLogPath		= ERROR_LOG_FILE_PATH;
	
	public  $iniFilePath		= INI_PATH;
	
	public function __construct(){
		
		$this->logObj		 	= new Logging($this->errorLogPath);
		$this->userObj  		= new User();
	}
	
	
	public function registerinsert($valueArray) { 
	
		$this->logObj->log(__FILE__,__LINE__," '".__FUNCTION__."': Starting valueArray =>",$valueArray, $this->information);
		
		$result	= $this->userObj->registerinsert($valueArray);
		
		if ($result) {
			$this->logObj->log(__FILE__,__LINE__," usrDataLogin: Ending Status =>", $result ,$this->alert);
		}else{
			$this->logObj->log(__FILE__,__LINE__," getFaqs : Ending Status =>", "No result", $this->warnings);
		} 

		return $result;
	}
}
?>
