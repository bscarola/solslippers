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
