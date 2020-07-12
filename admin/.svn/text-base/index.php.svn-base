<?php
/*
 Módulo para gestão de requisições na direcção do registro académico da UEM
*/
//Arquivo index.php criado em 24/12/2008 23:43
//Última modificação 25/12/2008 08:36

include_once "../../../mainfile.php";
include_once XOOPS_ROOT_PATH."/class/xoopsmodule.php";
include_once XOOPS_ROOT_PATH."/include/cp_functions.php";
include_once XOOPS_ROOT_PATH."/include/xoopscodes.php";
include_once XOOPS_ROOT_PATH.'/class/xoopsformloader.php';

include_once XOOPS_ROOT_PATH.'/class/xoopstree.php';
include_once XOOPS_ROOT_PATH.'/class/xoopslists.php';
include_once XOOPS_ROOT_PATH.'/include/xoopscodes.php';
include_once XOOPS_ROOT_PATH.'/class/module.errorhandler.php';
include_once XOOPS_ROOT_PATH.'/class/uploader.php';
include_once XOOPS_ROOT_PATH.'/modules/dra/class/xoopstree.php';

include '../../../include/cp_header.php';


if ( file_exists("../language/".$xoopsConfig['language']."/modinfo.php") ) 
{
	include("../language/".$xoopsConfig['language']."/modinfo.php");
	include("../language/".$xoopsConfig['language']."/main.php");
} 
else 
{	
	include("../language/english/modinfo.php");
	include("../language/english/main.php");
}
Xoops_cp_header();

$myts =& MyTextSanitizer::getInstance();

$eh = new ErrorHandler;

echo "<h1><center>"._CS_INDEXADMINTITLE."</center></h1>";
echo ""._CS_ADMINTEXT;

echo "<h2><center>"._CS_CREATEDBY." <a href='http://infomoz.net' target='_blank'>INFOmoz-Informática Moçambique</a></h2>";

echo ""._CS_DONATE;
echo '<center><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="4678124">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form></center>';



xoops_cp_footer();
?>