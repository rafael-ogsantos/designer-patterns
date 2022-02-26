<?php

use Src\Log\FileLogManager;
use Src\Log\StdOutLogManager;
use Src\Log\StdOutLogWritter;

require 'vendor/autoload.php';

$logManager = new FileLogManager(__DIR__ . '/log');
$logManager->log('Info', 'Testando log manager');