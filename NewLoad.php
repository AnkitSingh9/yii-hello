<?php

namespace cedcoss\yii2hello;

use Yii;

/**
 * This is just an example.
 */
class NewLoad extends \yii\base\Widget {
	public $data;//=array();
    
	public $menu;
    
    public function init(){

    	$this->getMenu();
    	parent::init();
    }
    
    public function getMenu(){
    	
		foreach($this->data as $item){
			if(isset($item['data'])){
				$this->menu .= "<li ".(isset($item['id'])?("id='".$item['id']."'"):"")."  ".(isset($item['class'])?("class='".$item['class']."'"):"")."><a ".(isset($item['linkOptions']['id'])?("id='".$item['linkOptions']['id']."'"):"")."  ".(isset($item['linkOptions']['class'])?("class='".$item['linkOptions']['class']."'"):"")."".(isset($item['linkMethod'])?("data-method='".$item['linkMethod']."'"):"")." href='#'>".$item['label']."</a><ul id='menu-drop'>";
				
				foreach($item['data'] as $subitem){		
					$this->menu .= "<li ".(isset($subitem['id'])?("id='".$subitem['id']."'"):"")."  ".(isset($subitem['class'])?("class='".$subitem['class']."'"):"")."><a ".(isset($subitem['linkOptions']['id'])?("id='".$subitem['linkOptions']['id']."'"):"")."  ".(isset($subitem['linkOptions']['class'])?("class='".$subitem['linkOptions']['class']."'"):"")."".(isset($subitem['linkMethod'])?("data-method='".$subitem['linkMethod']."'"):"")." href='".Yii::$app->request->BaseUrl."/index.php?r=".$subitem['url']."'>".$subitem['label']."</a></li>";
				}
				$this->menu .= "</ul>";
			}else{
				$this->menu .= "<li ".(isset($item['id'])?("id='".$item['id']."'"):"")."  ".(isset($item['class'])?("class='".$item['class']."'"):"")."><a ".(isset($item['linkOptions']['id'])?("id='".$item['linkOptions']['id']."'"):"")."  ".(isset($item['linkOptions']['class'])?("class='".$item['linkOptions']['class']."'"):"")."".(isset($item['linkMethod'])?("data-method='".$item['linkMethod']."'"):"")." href='".Yii::$app->request->BaseUrl."/index.php?r=".$item['url']."'>".$item['label']."</a></li>";
			}
		}    	
    }

	public function run() {
		return $this->render ( 'view',['menu'=>$this->menu] );
	}
}