<?php

//define('DIR_BASE',      dirname( dirname( __FILE__ ) ) . '/');
define('DIR_BASE', $_SERVER['DOCUMENT_ROOT'] . '/'); 
//define('VIEW_FOOTER2',  DIR_VIEWS  . 'footer2.php');
define('DIR_SYSTEM',    DIR_BASE   . 'inc/');
define('DIR_VIEWS',     DIR_SYSTEM . 'view/');
define('DIR_CTLS',      DIR_SYSTEM . 'control/');
define('DIR_MDLS',      DIR_SYSTEM . 'model/');
define('HEADER',        DIR_VIEWS  . 'header.php');
define('VIEW_NAV',      DIR_VIEWS  . 'navigation.php');
define('VIEW_FOOTER',   DIR_VIEWS  . 'footer.php');
define('VIEW_COMMONJS', DIR_VIEWS  . 'commonjs.php');

?>


<?php
/*
SAMPLE CONTROLLER

require( '../config.php' );
include( DIR_MDLS . 'model.php' );

$model = new model();
if ( $model->getStuff() ) {
    $page_to_load = DIR_VIEWS . 'page.php'
}
else {
    $page_to_load = DIR_VIEWS . 'otherpage.php'
}

include( VIEW_HEADER );
include( VIEW_NAVIGATION );
include( DIR_VIEWS . $page_to_load );
include( VIEW_FOOTER );
 
 */
?>