Ced-Menu Extension
======================
This is a Extension for a flexbile Yii Menu widget with multiple themes

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Changes
-------

open composer.json file of your project given under root directory and copy-paste the code given below

```
"repositories":[{
  			"type" :"git",
  			"url": "https://github.com/AnkitSingh9/yii-hello.git"
  		}],
				
"minimum-stability": "stable",  //This line might be already present in your composer.json file
"minimum-stability": "dev", 	//replace by this
```
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
  					'logo'=>'Cedcoss Menu',//Text Logo of your company it will become a link to home page of your site
			   		'theme'=>'black-red',//there three styles available in this extension black-red,black-green and white-purple by default it will use black-red
			   		'data'=>[
			        		['label'=>'Home','url'=>'site/index' ],//'linkOptions'=>['id'=>'CEDCOSS','class'=>'Technologies']], //To use id/class of <a> tag
			        		['label'=>'About Us', 'url'=>'site/about'],
			        		['label'=>'Contact', 'url'=>'site/contact'],//'id'=>'CEDCOSS','class'=>'Technologies'], //To use id/class of <li> tag
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
