hellobyextension
================
This is a test Extension

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist cedcoss/yii2-hello "*"
```

or add

```
"cedcoss/yii2-hello": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use cedcoss\yii2hello\CedMenu;
   echo CedMenu::widget([
			   		'theme'=>'white-purple',
			   		'data'=>[
			        		['label'=>'Home','url'=>'site/index' ],//'linkOptions'=>['id'=>'CEDCOSS','class'=>'Technologies']], //To use id/class of <a> tag
			        		['label'=>'About Us', 'url'=>'site/about'],
			        		['label'=>'Contact', 'url'=>'site/contact'],//'id'=>'CEDCOSS','class'=>'Technologies'], //To use id/class of a <li> tag
			        		Yii::$app->user->isGuest ?
			        		['label' => 'Login', 'url' =>'site/login'] :
							['label' => 'Logout (' . Yii::$app->user->identity->username . ')','url' =>'site/logout','linkOptions'=>['method' =>'post']],
					   		['label'=>'Sub-Menu','data'=>[
											   			['label'=>'Home','url'=>'/site/index'],
											   			['label'=>'About Us', 'url'=>'site/about'],
											   			['label'=>'Home','url'=>'site/index'],
											   		]
					   		],
        		]]);
