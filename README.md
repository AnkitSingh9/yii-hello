Ced-Menu Extension
======================
This is a Extension for a flexbile Yii Menu widget with multiple themes

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist cedcoss/yii2-hello "*"
```

or add

```
"cedcoss/yii2-hello": "*"
```

to the require section of your `composer.json` file.

Important
---------

The directory structure must be as by default by the framework otherwise you need to set the path in path/to/vendor/cedcoss/yii2-hello/views/view.php at line 7

```
$path = Yii::$app->request->baseUrl ."/../vendor/cedcoss/yii2-hello/"; //setup your directory structure here
```

Usage
-----

Once the extension is installed, simply use it in your code by  :

```
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
