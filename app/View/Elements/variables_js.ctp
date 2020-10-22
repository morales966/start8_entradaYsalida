<?php 
	$jsTranslations = array(
		'base_url'							=> $this->webroot,
		'controller'						=> $this->request->controller,
		'controller_menu'					=> mb_strtoupper($this->request->controller),
		'action'							=> $this->request->action
	);
	echo $this->Html->scriptBlock("copy_js =".json_encode($jsTranslations),				array('block' => 'variablesAppScript'));
?>