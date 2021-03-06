<?php

require_once('_include.php');

$config = SimpleSAML_Configuration::getInstance();

if(array_key_exists('link_href', $_REQUEST)) {
	$link = (string)$_REQUEST['link_href'];
	$link = \SimpleSAML\Utils\HTTP::normalizeURL($link);
} else {
	$link = 'index.php';
}

if(array_key_exists('link_text', $_REQUEST)) {
	$text = $_REQUEST['link_text'];
} else {
	$text = '{logout:default_link_text}';
}

$t = new SimpleSAML_XHTML_Template($config, 'logout.php');
$t->data['link'] = $link;
$t->data['text'] = $text;
$t->show();
exit();

?>