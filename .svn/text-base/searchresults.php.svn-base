<?php
/*
 Módulo para gestão de requisições na direcção do registro académico da UEM
*/
//Arquivo Xoops_version.php criado em 24/12/2008 23:44
//Última modificação 24/12/2008 23:44

include "../../mainfile.php";
if ( file_exists("language/".$xoopsConfig['language']."/main.php") )
 {
	include("language/".$xoopsConfig['language']."/main.php");
}
 else 
{
	include("language/english/main.php");
}
$xoopsOption['template_main'] = 'cs_searchresults.html';
include XOOPS_ROOT_PATH."/header.php";

/* Coloque aqui o código para seleção do conteúdo */
$value="Elisio Leonardo";
$xoopsTpl->assign('var_name', $value);
$xoopsTpl->assign('xoops_pagetitle',_CS_RESULTSPAGE_TITLE.$xoopsConfig['sitename']);
$pagina=$xoopsModuleConfig['searchpage'];
$xoopsTpl->assign('searchpage',$pagina);
$xoopsTpl->assign('createdby',_CS_CREATEDBY);

include_once XOOPS_ROOT_PATH.'/footer.php';
?>
