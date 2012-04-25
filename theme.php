<?php

/*
 * Name: mobile (experimental)
 * Description: 
 * Version: 
 * Author: unknown
 * Maintainer: 
 * Screenshot: 
 */

$a = get_app();
$a->theme_info = array(
	'name' => 'mobile',
	'version' => '0.1'
);

function mobile_init(&$a) {

	$cssFile = $a->get_baseurl($ssl_state)."/view/theme/mobile/jquerymobile.css";
   $a->page['htmlhead'] .= sprintf('<link rel="stylesheet" type="text/css" href="%s" />', $cssFile);
	
	$a->page['htmlhead'] .= <<<EOT
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.js"></script>
	
EOT;

}




