Yii2 Swagger Module
============

This module integrate [swagger-php](https://github.com/zircote/swagger-php) and [swagger-ui v3](https://github.com/swagger-api/swagger-ui).

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ignatenkovnikita/yii2-swagger "*"
```

or add

```
"ignatenkovnikita/yii2-swagger": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

You set url, where locate json file OR set path for scan

```php
'modules' => [
      ...
        'swagger' => [
            'class' => \ignatenkovnikita\swagger\Module::class,
            //'url' => '/api/swagger/swagger.yaml',
            'path' => '@frontend/modules/api'
        ]
        ...
    ],```
