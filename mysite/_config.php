<?php

global $project;
$project = 'mysite';

global $database;
$database = 'bitnami_silverstripe';
ini_set('mysqli.default_socket', '/opt/bitnami/mysql/tmp/mysql.sock');

//Use _ss_environment.php file for configuration
require_once("conf/ConfigureFromEnv.php");

//Security::setDefaultAdmin('admin','password');

//SSL disabled because Chrome does not like unsigned cert
//Director::forceSSL(array('/^registration/', '/^Security/','/^admin/'));

SS_Log::add_writer(new SS_LogFileWriter('/home/scarola_gmail_com/logs/silverstripe/ss-notice.log'), SS_Log::NOTICE);
SS_Log::add_writer(new SS_LogFileWriter('/home/scarola_gmail_com/logs/silverstripe/ss-error.log'), SS_Log::ERR);

