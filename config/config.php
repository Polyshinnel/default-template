<?php 

//Константы для обращения к контроллерам
define('PathPrefix','./controllers/');
define('PathPostfix','Controller.php');


//Настройки smarty

//Используемый шаблон
$template = 'default';

//Пути к файлам tpl
define('TemplateWebPrefix',"./views/{$template}/");
define('TemplateWebPostfix','.tpl');

//Пути к файлам в веб пространстве
define('TemplateWebPath',"/assets/{$template}/");

require('./library/Smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir(TemplateWebPrefix);
$smarty->setCompileDir('./tmp/smarty/templates_c');
$smarty->setCacheDir('./tmp/smarty/cache');
$smarty->setConfigDir('./libs/Smarty/configs');

$smarty->assign('templateWebPath',TemplateWebPath);
