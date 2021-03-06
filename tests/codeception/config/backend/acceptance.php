<?php
defined('YII_ROOT_DIR') or define('YII_ROOT_DIR', dirname(dirname(dirname(dirname(__DIR__)))));
return yii\helpers\ArrayHelper::merge(
    require(YII_ROOT_DIR . '/common/config/main.php'),
    require(YII_ROOT_DIR . '/common/config/main-local.php'),
    require(YII_ROOT_DIR . '/backend/config/main.php'),
    require(YII_ROOT_DIR . '/backend/config/main-local.php'),
    require(dirname(__DIR__) . '/config.php'),
    require(dirname(__DIR__) . '/acceptance.php'),
    require(__DIR__ . '/config.php'),
    [
    ]
);
