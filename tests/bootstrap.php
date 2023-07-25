<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/..', '.env.testing');
$dotenv->load();

define('TEST_USER', getenv('TEST_USER'));
define('TEST_PASSWORD', getenv('TEST_PASSWORD'));
define('TEST_COMPANY', getenv('TEST_COMPANY'));