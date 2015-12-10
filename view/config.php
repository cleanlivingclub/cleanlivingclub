<?php
	/**
	 * This is file for smarty configaration file.
	 */
	 
	require('include.php');
	require('includes/smartylibs/Smarty.class.php');
	$smarty = new Smarty;
	
	//$smarty->force_compile = true;
	$smarty->debugging 		= false;
	$smarty->caching 		= true;
	$smarty->cache_lifetime = 20;
	$smarty->cache_dir 		= 'display/cache';
	$smarty->compile_dir	= 'display/templates_c';
	$smarty->config_dir		= 'display/configs';
	$smarty->plugins_dir	= 'display/plugins';
	
	$smarty->clearAllCache();
		
	$smarty->setTemplateDir(array(
        'index' => 'view/display/templates',
		'main' => 'display/templates',
		'user' => BASE_PATH.'view/display/templates_user',
		'admin' => BASE_PATH.'view/display/templates_admin'
	));
?>
