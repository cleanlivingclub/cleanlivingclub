<?php
/**
 * This is the main page to configure the root paths 
 * session configuration
 * etc.
 */
#for session start.
@session_start();

error_reporting(0);

#USER LEVALS
define('MANAGER', '1');
define('EMPLOYEE', '2');
define('CLIENT', '3');
define('INDIVIDUAL', '4');

#SURVEY TYPE
define('WHITEBOX', '1');
define('BLACKBOX', '2');

#For Loan Status COmparision
define('COMPLETED', '4');
define('CURRENT_PAGE', '');
#For Member Type COmparision
define('COAPPLICANT', '2');

# for notfication type
define('EVENT', '1');
define('MEMO', '2');
define('INFORMATIONS', '3');
define('FEEDBACK', '4');

#Question Types
define('RADIO', '1');
define('CHECK', '2');
define('TEXT', '3');

#for template dynamic loading.

//define('TEMPLATE_GREEN', '4');


define('TEMPLATE_NAME', 'cleanlivingclub');


# for module ids
define('USER', '1');
define('SWARNADHRA', '2');
define('ATTENDENCE', '3');
define('LEAVES', '4');
define('NOTIFICATION', '5');

# for module operations
define('VIEW', '1');
define('ADD', '2');
define('MODIFY', '3');
define('DELETE', '4');
define('ALTER', '5');

# for COLORS
define('RED', 'red');
define('GREEN', 'green');
define('BLACK', 'black');

#for info folder
define('INFO','info/');


define('MODULE_GROUP' , 'user/');



if (isset($_SERVER["HTTP_HOST"]) && $_SERVER["HTTP_HOST"] == 'localhost') {
	
	define('LOCAL_WEBSITE','cleanlivingclub');
	
	define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'].'/'.LOCAL_WEBSITE.'/');
	
	
	define('SERVER_PATH' , 'http://'.$_SERVER['HTTP_HOST'].'/'.LOCAL_WEBSITE.'/view/');
	
	define('INDEX_URL' , 'http://'.$_SERVER['HTTP_HOST'].'/'.LOCAL_WEBSITE.'/');
	
	define('TEMPLATE' ,'http://'.$_SERVER['HTTP_HOST'].'/'.LOCAL_WEBSITE.'/view/display/');
	
	define('MANAGE_URL' , 'http://'.$_SERVER['HTTP_HOST'].'/'.LOCAL_WEBSITE.'/manage/');
	
	define('DASHBOARD_URL' , 'http://'.$_SERVER['HTTP_HOST'].'/'.LOCAL_WEBSITE.'/view/dashboards/');
	define('CHAT_LOGOUT' , INDEX_URL.'chat/login.php');
	
	
} else {

	define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
		
	define('SERVER_PATH', 'http://'.$_SERVER['HTTP_HOST'].'/view/');	
	
	define('INDEX_URL' , 'http://'.$_SERVER['HTTP_HOST'].'/');
	
	define('TEMPLATE' , 'http://'.$_SERVER['HTTP_HOST'].'/view/display/');
	
	define('MANAGE_URL' , 'http://'.$_SERVER['HTTP_HOST'].'/manage/');
	
	define('DASHBOARD_URL' , 'http://'.$_SERVER['HTTP_HOST'].'/view/dashboards/');
	define('CHAT_LOGOUT' , INDEX_URL.'chat/login.php');
	
	
}

?>
