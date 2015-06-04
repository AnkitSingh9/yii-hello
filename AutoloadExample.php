<?php

namespace cedcoss\yii2hello;
use yii\base\Widget;
use yii\helpers\Html;
/**
 * This is just an example.
 */
class AutoloadExample extends \yii\base\Widget
{
	
    public function run()
    {
    	/* print_r(self::$abc); */
    	
        $msg = "Hello Everyone!<br> Try this also <br>";
    	$msg.= "use cedcoss/yii2hello/CedMenu <br> and see ReadMe.txt file<br>";
    	
        return $msg;
    }
    
}
