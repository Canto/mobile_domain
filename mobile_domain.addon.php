<?php
	/*
	mobile_domain.addon.php
	surpport by mobile domain
	*/
	if($called_position == 'before_module_init') {
		if(Mobile::isMobileCheckByAgent() && !strstr($_SERVER['SERVER_NAME'],$addon_info->mobiledomain)){
			header('Location: //'.$addon_info->mobiledomain.$_SERVER['REQUEST_URI']);
		}
	}
?>
