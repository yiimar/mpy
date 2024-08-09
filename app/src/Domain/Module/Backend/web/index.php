<?php

declare(strict_types=1);

use yii\helpers\ArrayHelper;
use yii\web\Application;

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require dirname(__DIR__, 5) . '/vendor/autoload.php';
require dirname(__DIR__, 5) . '/vendor/yiisoft/yii2/Yii.php';
require dirname(__DIR__) . '/config/bootstrap.php';
require dirname(__DIR__, 3) . '/Core/config/bootstrap.php';

$config = ArrayHelper::merge(
    require dirname(__DIR__, 3) . '/Core/config/main.php',
    require dirname(__DIR__, 3) . '/Core/config/main-local.php',
    require dirname(__DIR__) . '/config/main.php',
    require dirname(__DIR__) . '/config/main-local.php'
);

(new Application($config))->run();
