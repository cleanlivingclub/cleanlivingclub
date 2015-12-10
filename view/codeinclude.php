<?php


	
	
	
		
		

	#for paths declaration.
	$smarty->assign('BASE_PATH', BASE_PATH);	
	$smarty->assign('SERVER_PATH', SERVER_PATH);
	$smarty->assign('INDEX_URL', INDEX_URL);	
	$smarty->assign('TEMPLATE', TEMPLATE);
	
	$smarty->assign('MANAGER', MANAGER);
	$smarty->assign('EMPLOYEE', EMPLOYEE);
	$smarty->assign('CLIENT', CLIENT);
	
	#for user module operation assignments
	$smarty->assign('VIEW', VIEW);
	$smarty->assign('ADD', ADD);
	$smarty->assign('MODIFY', MODIFY);
	$smarty->assign('DELETE', DELETE);
	$smarty->assign('ALTER', ALTER);
	
	#for module assignments
	$smarty->assign('USER', USER);			
?>
