<?php
/*
 Módulo para gestão de requisições na direcção do registro académico da UEM
*/
//Arquivo Xoops_version.php criado em 24/12/2008 22:27
//Última modificação 24/12/2008 22:27

//Informações gerais do módulo
$modversion['name']=_MI_cs_NAME;
$modversion['version']=0.6;
$modversion['description']=_MI_cs_DESC;
$modversion['credits']=_MI_cs_CREDITS;
$modversion['author']=_MI_cs_AUTHOR;
$modversion['help']="cs_ajuda.html";
$modversion['license']="Creative Commons";
$modversion['official']=0;
$modversion['image']="images/cs_logo.png";
$modversion['dirname']="customsearch";




//Configurações da área administrativa
$modversion['hasAdmin']=1;
$modversion['adminindex']="admin/index.php";
$modversion['adminmenu']="admin/menu.php";

//Configurações do template
$modversion['templates'][1]['file']="cs_index.html";
$modversion['templates'][1]['description']=_MI_cs_SEARCHRINDEXDESC;
$modversion['templates'][1]['file']="cs_searchresults.html";
$modversion['templates'][1]['description']=_MI_cs_SEARCHREULTDESC;


//Informações dos blocos
$modversion['blocks'][1]['file']="cs_searchbar.php";
$modversion['blocks'][1]['name']=_MI_cs_BAR_NOME;
$modversion['blocks'][1]['description']=_MI_cs_BSEARCH_DESC;
$modversion['blocks'][1]['show_func']="cs_bar_show";
$modversion['blocks'][1]['edit_func']="cs_bar_edit";
$modversion['blocks'][1]['template']="cs_block_searchbar.html";

//Configurações da busca pelo módulo
$modversion['hasSearch']=0;


// Menu
$modversion['hasMain'] = 1;



/**
 * This part inserts the selected topics as sub items in the Xoops main menu
 
$module_handler =& xoops_gethandler('module');
$module =& $module_handler->getByDirname($modversion['dirname']);
if ($module) {
    global $xoopsUser;
    if (is_object($xoopsUser)) {
        $groups = $xoopsUser->getGroups();
    } else {
        $groups = XOOPS_GROUP_ANONYMOUS;
    }
    $gperm_handler =& xoops_gethandler('groupperm');
    if ($gperm_handler->checkRight("news_submit", 0, $groups, $module->getVar('mid'))) {
          $cansubmit = 1;
    }
}
*/

//Configurações do módulo
//Estes dois campos onde serão inseridos os códigos da página e da barra de pesquisa
$modversion['config'][1]['name'] = 'searchpage';
$modversion['config'][1]['title'] = '_MI_cs_SEARCHPAGECODE';
$modversion['config'][1]['description'] = '_MI_cs_SEARCHPAGECODE_DSC';
$modversion['config'][1]['formtype'] = 'textarea';
$modversion['config'][1]['valuetype'] = 'text';
$modversion['config'][1]['default'] = '';

$modversion['config'][2]['name'] = 'google_cx';
$modversion['config'][2]['title'] = '_MI_cs_GOOGLE_CX';
$modversion['config'][2]['description'] = '_MI_cs_GOOGLE_CX_DSC';
$modversion['config'][2]['formtype'] = 'textbox';
$modversion['config'][2]['valuetype'] = 'text';
$modversion['config'][2]['default'] = '001279256170588792121:oqybm7rfrco';

$modversion['config'][3]['name'] = 'google_cof';
$modversion['config'][3]['title'] = '_MI_cs_GOOGLE_COF';
$modversion['config'][3]['description'] = '_MI_cs_GOOGLE_COF_DSC';
$modversion['config'][3]['formtype'] = 'textbox';
$modversion['config'][3]['valuetype'] = 'text';
$modversion['config'][3]['default'] = 'FORID:11';

$modversion['config'][4]['name'] = 'google_ie';
$modversion['config'][4]['title'] = '_MI_cs_GOOGLE_IE';
$modversion['config'][4]['description'] = '_MI_cs_GOOGLE_IE_DSC';
$modversion['config'][4]['formtype'] = 'textbox';
$modversion['config'][4]['valuetype'] = 'text';
$modversion['config'][4]['default'] = 'UTF-8';

$modversion['config'][5]['name'] = 'google_q';
$modversion['config'][5]['title'] = '_MI_cs_GOOGLE_Q';
$modversion['config'][5]['description'] = '_MI_cs_GOOGLE_Q_DSC';
$modversion['config'][5]['formtype'] = 'textbox';
$modversion['config'][5]['valuetype'] = 'text';
$modversion['config'][5]['default'] = '31';

$modversion['config'][6]['name'] = 'google_sa';
$modversion['config'][6]['title'] = '_MI_cs_GOOGLE_SA';
$modversion['config'][6]['description'] = '_MI_cs_GOOGLE_SA_DSC';
$modversion['config'][6]['formtype'] = 'textbox';
$modversion['config'][6]['valuetype'] = 'text';
$modversion['config'][6]['default'] = _MI_cs_SAV;

$modversion['config'][7]['name'] = 'google_src';
$modversion['config'][7]['title'] = '_MI_cs_GOOGLE_SCR';
$modversion['config'][7]['description'] = '_MI_cs_GOOGLE_SCR_DSC';
$modversion['config'][7]['formtype'] = 'textbox';
$modversion['config'][7]['valuetype'] = 'text';
$modversion['config'][7]['default'] = 'http://www.google.com/coop/cse/brand?form=cse-search-box&lang=pt';




?>