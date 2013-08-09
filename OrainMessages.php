<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	exit( 1 );
}

$wgExtensionCredits['other'][] = array(
	'author'         => 'Kudu',
	'descriptionmsg' => 'orainmessages-desc',
	'name'           => 'OrainMessages',
	'path'           => __FILE__,
	'url'            => '//github.com/Orain/OrainMessages',
);

$wgExtensionMessagesFiles['ZOrainMessages'] = dirname( __FILE__ ) . '/OrainMessages.i18n.php';
