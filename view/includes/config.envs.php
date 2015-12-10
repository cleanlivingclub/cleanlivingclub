<?php
/**
 * Define environments
 *
 */

// local (http://localhost/jobberbase/public)
$__instances['local'] = array(
	// should be a unique part of the url (or the entire url if you wish)
	'prefix' => 'localhost',
	// mysql credentials
	'db_host' => 'localhost',
	'db_port' => 3306,
	'db_user' => 'root',
	'db_password' => '',
	'db_name' => 'sdar',
	'db_prefix' => '',
	// your site's full url
	'app_url' => 'http://localhost/gedm.in/',
	'manage_url' => 'http://localhost/gedm.in/manage/',
	'base_path' => 'C:/xampp/htdocs/gedm.in/',
	'view' => 'view/',
	'controller_applog' => 'controller/errorlog/',
	'model_applog' => 'model/applog/',
	'display' => 'display/',
	'template_name' => 'schoolgreen',
	'ini' => 'ini/',
	'user_image' => 'user/image/',
	// error reporting
	'ini_error_reporting' => E_ALL,
	'ini_display_errors' => 'On',
	// environment setting 1 (use 'local' for localhost/testing OR 'online' for live, production environment)
	'location' => 'local',
	// environment setting 2 (use 'dev' together with 'local' in the previous setting OR 'prod' with 'online')
	
);

// live (http://www.yourjobberbasedomain.com)
$__instances['live'] = array(
	// should be a unique part of the url (or the entire url if you wish)
	'prefix' => 'gedm.in',
	// mysql credentials
	'db_host' => 'localhost',
	'db_port' => 3306,
	'db_user' => 'dvtsgedm_gedm',
	'db_password' => 'xi9KQpll8JVL',
	'db_name' => 'dvtsgedm_gedm',
	'db_prefix' => '',
	// your site's full url
	'app_url' => 'http://'.$_SERVER['HTTP_HOST'].'/',
	'manage_url' => 'http://'.$_SERVER['HTTP_HOST'].'/manage/',
	'base_path' => $_SERVER['DOCUMENT_ROOT'].'/',
	'view' => 'view/',
	'controller_applog' => 'controller/errorlog/',
	'model_applog' => 'model/applog/',
	'display' => 'display/',
	'template_name' => 'schoolgreen/',
	'ini' => 'ini/',
	'user_image' => 'user/image/',
	// error reporting
	'ini_error_reporting' => E_ALL,
	'ini_display_errors' => 'On',
	// environment setting 1 (use 'local' for localhost/testing OR 'online' for live, production environment)
	'location' => 'online',
	// environment setting 2 (use 'dev' together with 'local' in the previous setting OR 'prod' with 'online')
	
);


// setup current instance
foreach ($__instances as $__instance)
{
	// http requests
	if (isset($_SERVER['HTTP_HOST']))
	{
		$_compare_to = $_SERVER['HTTP_HOST'];
	}

	if (strstr($_compare_to, $__instance['prefix']))
	{
		define('DB_SERVER', $__instance['db_host']);
		define('DB_PORT', $__instance['db_port']);
		define('DB_USER', $__instance['db_user']);
		define('DB_PASS', $__instance['db_password']);
		define('DB_DATABASE', $__instance['db_name']);
		define('DB_PREFIX', $__instance['db_prefix']);
		
		define('INDEX_URL', $__instance['app_url']);
		define('MANAGE_URL', $__instance['manage_url']);
		define('BASE_PATH', $__instance['base_path']);
		define('SERVER_PATH', $__instance['app_url'].$__instance['view']);
		define('TPL_PATH', $__instance['base_path'].$__instance['view'].$__instance['display'].$__instance['template_name']);
		
		define('INI_PATH', $__instance['base_path'].$__instance['view'].$__instance['ini']);
		define('USER_IMAGE_PATH', $__instance['base_path'].$__instance['view'].$__instance['user_image']);
		
		define('TEMPLATE_NAME', $__instance['template_name']);
		
		define('TEMPLATE', $__instance['app_url'].$__instance['view'].$__instance['display'].$__instance['template_name']);
		//print_r(get_defined_constants());die();
		define('LOG_FILE_PATH', $__instance['base_path'].$__instance['model_applog']);
		define('ERROR_LOG_FILE_PATH', $__instance['base_path'].$__instance['model_applog']);
	
		// values kind of redundant, they indicate wether this is a live/production or dev/testing environment
		define('LOCATION', $__instance['location']);
		
		// base url of the app
		define('APP_URL', $__instance['app_url']);
		//print_r(get_defined_constants());die();
		// error reporting
		ini_set('error_reporting', $__instance['ini_error_reporting']);
		ini_set('display_errors', $__instance['ini_display_errors']);
		
		break;
	}
}
?>