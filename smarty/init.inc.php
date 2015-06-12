<?php
	define("SMARTY_ROOT",str_replace("/", "\\", dirname(__FILE__)."/"));
	include_once(SMARTY_ROOT."libs/Smarty.class.php");
	$smarty = new Smarty();

	$smarty->setTemplateDir(SMARTY_ROOT."templates")
		   ->setCompileDir(SMARTY_ROOT."templates_c")
		   ->setConfigDir(SMARTY_ROOT."configs")
		   ->setPluginsDir(SMARTY_ROOT."plugins");


