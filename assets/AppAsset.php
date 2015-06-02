<?php 
namespace cedcoss\yii2hello\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
	public $basePath = '@webroot';
	//public $baseUrl = '@web';
	public $css = [
	//'css/site.css',
	'css/menu.css'
	];
	public $js = [
	];
	public $depends = [
	'yii\web\YiiAsset',
	'yii\bootstrap\BootstrapAsset',
	];
	
	static function register($view) {
		//die(self::basePath);
		AppAsset::register($this);
		parent::register($view);
	}
}








?>