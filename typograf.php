<?php
/*
Plugin Name: Typograf
Plugin URI: http://www.artlebedev.ru/tools/typograf/
Description: Is this "Typograf"? No, this is &laquo;Typograf&raquo;!
Author: Pavel Volkov (Typograf authors: http://www.artlebedev.ru/tools/typograf/authors/)
Author URI: http://www.snova.biz/
Version: 0.1
*/

function typograf_run($text) {
	include "remotetypograf.php";

	$remoteTypograf = new RemoteTypograf ();

	$remoteTypograf->htmlEntities();
	$remoteTypograf->br (false);
	$remoteTypograf->p (true);
	$remoteTypograf->nobr (3);

	return $remoteTypograf->processText ($text);
}

add_filter('content_save_pre', 'typograf_run');

?>