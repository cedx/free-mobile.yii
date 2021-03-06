<?php declare(strict_types=1);
use yii\console\Application;

// Set the environment.
define("YII_DEBUG", true);
define("YII_ENV", "test");

// Load the class library.
$rootPath = (new SplFileInfo(__DIR__))->getPath();
require_once "$rootPath/vendor/autoload.php";
require_once "$rootPath/vendor/yiisoft/yii2/Yii.php";
Yii::setAlias("@root", $rootPath);
Yii::setAlias("@yii/freemobile", "$rootPath/src");

// Start the application.
new Application(["id" => "yii2-free-mobile", "basePath" => "@root/src"]);
