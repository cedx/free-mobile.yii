# Free-Mobile.yii
[![Release](http://img.shields.io/packagist/v/cedx/yii-free-mobile.svg?style=flat)](https://packagist.org/packages/cedx/yii-free-mobile) [![License](http://img.shields.io/packagist/l/cedx/yii-free-mobile.svg?style=flat)](https://github.com/cedx/free-mobile.yii/blob/master/LICENSE.txt) [![Downloads](http://img.shields.io/packagist/dt/cedx/yii-free-mobile.svg?style=flat)](https://packagist.org/packages/cedx/yii-free-mobile)

[Free Mobile](http://mobile.free.fr) logging for [Yii](http://www.yiiframework.com), high-performance [PHP](https://php.net) framework.

This package provides a single class, `CFreeMobileLogRoute`
which is a log route allowing to send log messages by SMS to a mobile phone.

To use it, you must have a Free Mobile account and have enabled SMS Notifications
in the Options of your [Subscriber Area](https://mobile.free.fr/moncompte).

![Screenshot](http://dev.belin.io/free-mobile.yii/img/screenshot.jpg)

## Documentation
- [API Reference](http://dev.belin.io/free-mobile.yii/api)

## Installing via [Composer](https://getcomposer.org)
From a command prompt, run:

```shell
$ composer require cedx/yii-free-mobile
```

Now in your application configuration file, you can use the following log route:

```php
return [
  'components' => [
    'log' => [
      'class' => 'system.logging.CLogRouter',
      'routes' => [
        [
          'class' => 'ext.cedx.yii-free-mobile.lib.CFreeMobileLogRoute',
          'password' => '<your Free Mobile identification key>',
          'userName' => '<your Free Mobile user name>'
        ]
      ]
    ]
  ]
];
```

Adjust the values as needed. Here, it's supposed that [`CApplication->extensionPath`](http://www.yiiframework.com/doc/api/1.1/CApplication#extensionPath-detail), that is the [`ext`](http://www.yiiframework.com/doc/guide/1.1/en/basics.namespace) root alias, has been set to Composer's `vendor` directory.

## License
[Free-Mobile.yii](https://packagist.org/packages/cedx/yii-free-mobile) is distributed under the MIT License.
