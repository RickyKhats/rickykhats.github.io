<?php
@ini_set ( 'display_errors', false );
@ini_set ( 'html_errors', false );
@ini_set ( 'error_reporting', E_ALL ^ E_WARNING ^ E_NOTICE );
@ob_start ();
@ob_implicit_flush ( 0 );
define ( 'gamepl', true );
define ( 'ROOT_DIR', dirname ( __FILE__ ) );
include(ROOT_DIR.'/engine/init.php');
$tpl->global_clear ();
$db->close ();
$m->close();
?>