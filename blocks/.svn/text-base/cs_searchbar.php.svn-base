<?php

include XOOPS_ROOT_PATH."/mainfile.php";


include XOOPS_ROOT_PATH."/header.php";
function cs_bar_show()
{
	global $xoopsModuleConfig;
	$module_handler =& xoops_gethandler('module');
		$module =& $module_handler->getByDirname('customsearch');
		$config_handler =& xoops_gethandler('config');
		    $moduleConfig =& $config_handler->getConfigsByCat(0, $module->getVar('mid'));
	 
    $block = array();
	$block['google_cx']=$moduleConfig['google_cx'];
	$block['google_cof']=$moduleConfig['google_cof'];
	$block['google_ie']=$moduleConfig['google_ie'];
	$block['google_q']=$moduleConfig['google_q'];
	$block['google_sa']=$moduleConfig['google_sa'];
	$block['google_src']=$moduleConfig['google_src'];
    return $block;
}

function cs_bar_edit()
{
}

?>