<?php
/*
 Módulo para gestão de requisições na direcção do registro académico da UEM
*/
//Arquivo Xoops_version.php criado em 24/12/2008 23:44
//Última modificação 24/12/2008 23:44

include "../../mainfile.php";
if ( file_exists("language/".$xoopsConfig['language']."/modinfo.php") )
 {
	include("language/".$xoopsConfig['language']."/modinfo.php");
}
 else 
{
	include("language/english/modinfo.php");
}
include XOOPS_ROOT_PATH."/header.php";
$xoopsOption['template_main'] = 'dra_index.html';
/* Coloque aqui o código para seleção do conteúdo */
redirect_header('searchresults.php',3,'');



include_once XOOPS_ROOT_PATH.'/footer.php';
?>
