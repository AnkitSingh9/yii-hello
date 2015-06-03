<?php

namespace cedcoss\yii2hello;

/**
 * This is just an example.
 */
class AutoloadExample extends \yii\base\Widget
{
    public function run()
    {
    	$msg = "Hello Everyone!<br> Try this also <br>";
    	$msg.= "use cedcoss/yii2hello/NewLoad <br> and use NewLoad::widget()";
        return $msg;
    }
}
