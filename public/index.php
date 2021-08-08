<?php

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app/Config' . DIRECTORY_SEPARATOR . 'functions.php';

errorReporting(true);

new \App\Config\Router\Router;
