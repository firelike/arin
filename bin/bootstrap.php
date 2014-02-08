<?php
if ( isset($_SERVER[ 'OS' ]) && $_SERVER[ 'OS' ] == 'Windows_NT' ) {
    $_SERVER[ 'APPLICATION_ENV' ] = 'development';
} else {
    $_SERVER[ 'APPLICATION_ENV' ] = 'production';
}

include_once APPLICATION_PATH . '/environment.php';
include_once APPLICATION_PATH . '/config_files.php';

require_once 'Zend/Application.php';

$application = new Zend_Application(APPLICATION_ENV, array( 
    'config' => $config_files 
));
$application->bootstrap();
