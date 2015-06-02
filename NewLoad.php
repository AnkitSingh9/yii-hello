<?php

namespace cedcoss\yii2hello;

use Yii;

/**
 * This is just an example.
 */
class NewLoad extends \yii\base\Widget {
	/* public function init() {
		Yii::$app->components ['assetManager'] = [ 
				'bundles' => [ 
						'yii\bootstrap\BootstrapAsset' => [ 
								
								'css' => [ 
										'assets/css/menu.css' 
								] 
						] 
				] 
		]
		;
		parent::init ();
	} */
	public function run() {
		return $this->render ( 'view' );
		/*
		 * $msg = '<ul id="menu"><li><a href=#>Home</a></li><li><a href=#>About Us</a></li><li><a href=#>Career</a></li>'; $msg .='<li><a href=#>Contact Us</a><ul id="menu-drop"><li><a href=#>Home</a></li><li><a href=#>About Us</a></li><li><a href=#>Career</a></li>'; $msg .='</ul></li></ul>'; return $msg;
		 */
	}
}