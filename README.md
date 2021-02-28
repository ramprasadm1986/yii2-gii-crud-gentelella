Gentelella based Gii CRUD template generator
==================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

```
php composer.phar require --prefer-dist ramprasadm1986/yii2-gii-crud-gentelella "*"
```



To use this template, add to main config in gii section following code:

```php
    'gii' => [
            ...
            'generators' => [ //here
            'crud' => [ // generator name
                'class' => 'yii\gii\generators\crud\Generator', // generator class
                'templates' => [ //setting for the templates
                    'Gentelella' => '@vendor/ramprasadm1986/yii2-gii-crud-gentelella/src/gii/templates/crud',
                ]
            ]
            ....
        ],
```
Changing "Code Template" to Gentelella in Gii CRUD Generator panel.
