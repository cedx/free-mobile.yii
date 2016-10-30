# Free Mobile for Yii
![Release](https://img.shields.io/packagist/v/cedx/yii2-free-mobile.svg) ![License](https://img.shields.io/packagist/l/cedx/yii2-free-mobile.svg) ![Downloads](https://img.shields.io/packagist/dt/cedx/yii2-free-mobile.svg) ![Code quality](https://img.shields.io/codacy/grade/b7169de7f3c845eb86161f66df6875e2.svg) ![Build](https://img.shields.io/travis/cedx/yii2-free-mobile.svg)

[Free Mobile](http://mobile.free.fr) logging for [Yii](http://www.yiiframework.com), high-performance [PHP](https://secure.php.net) framework.

This package provides a single class, `yii\log\FreeMobileTarget`
which is a log target allowing to send log messages by SMS to a mobile phone.

To use it, you must have a Free Mobile account and have enabled SMS Notifications
in the Options of your [Subscriber Area](https://mobile.free.fr/moncompte).

## Requirements
The latest [PHP](https://secure.php.net) and [Composer](https://getcomposer.org) versions.
If you plan to play with the sources, you will also need the [Phing](https://www.phing.info) latest version.

## Installing via [Composer](https://getcomposer.org)
From a command prompt, run:

```shell
$ composer require cedx/yii2-free-mobile
```

## Usage
In your application configuration file, you can use the following log route:

```php
return [
  'bootstrap' => [ 'log' ],
  'components' => [
    'log' => [
      'targets' => [
        [
          'class' => 'yii\log\FreeMobileTarget',
          'levels' => [ 'error' ],
          'password' => '<your Free Mobile identification key>',
          'userName' => '<your Free Mobile user name>'
        ]
      ]
    ]
  ]
];
```

## See Also
- [Code Quality](https://www.codacy.com/app/cedx/yii2-free-mobile)
- [Continuous Integration](https://travis-ci.org/cedx/yii2-free-mobile)

## License
[Free Mobile for Yii](https://github.com/cedx/yii2-free-mobile) is distributed under the Apache License, version 2.0.
