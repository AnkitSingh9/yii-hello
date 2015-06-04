<?php

namespace cedcoss\yii2hello;
use Yii;

class CedMenu extends \yii\base\Widget {

	public $data;
	public $logo="Ced-Menu ";
	public $theme="black-red";
    public $themes=array(0=>'black-red',1=>'white-purple',2=>'black-green');
    
	public $menu;
    
    public function init(){

    	$this->getMenu();
    	parent::init();
    }
    
    public function getMenu(){
    	if(isset($this->theme) && $this->theme !=="black-red"){
    		if(!in_array($this->theme,$this->themes)){
				$this->theme = $this->themes[0];	    			
    		}
    	}
		foreach($this->data as $item){
			if(isset($item['data'])){
				$this->menu .= "<li ".(isset($item['id'])?("id='".$item['id']."'"):"")."  class='dropdown ".(isset($item['class'])?($item['class']):"")."'><a ".(isset($item['linkOptions']['id'])?("id='".$item['linkOptions']['id']."'"):"")."  ".(isset($item['linkOptions']['class'])?("class='".$item['linkOptions']['class']."'"):"")."".(isset($item['linkOptions']['method'])?("data-method='".$item['linkOptions']['method']."'"):"");
				$this->menu.= "class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'"." href='#'>".$item['label']."<span class='caret'></span></a><ul class='dropdown-menu menu-drop'  role='menu'>";
				
				foreach($item['data'] as $subitem){		
					$this->menu .= "<li ".(isset($subitem['id'])?("id='".$subitem['id']."'"):"")."  ".(isset($subitem['class'])?("class='".$subitem['class']."'"):"")."><a ".(isset($subitem['linkOptions']['id'])?("id='".$subitem['linkOptions']['id']."'"):"")."  ".(isset($subitem['linkOptions']['class'])?("class='".$subitem['linkOptions']['class']."'"):"")."".(isset($subitem['linkOptions']['method'])?("data-method='".$subitem['linkOptions']['method']."'"):"")." href='".Yii::$app->request->BaseUrl."/index.php?r=".$subitem['url']."'>".$subitem['label']."</a></li>";
				}
				$this->menu .= "</ul>";
			}else{
				$this->menu .= "<li ".(isset($item['id'])?("id='".$item['id']."'"):"")."  ".(isset($item['class'])?("class='".$item['class']."'"):"")."><a ".(isset($item['linkOptions']['id'])?("id='".$item['linkOptions']['id']."'"):"")."  ".(isset($item['linkOptions']['class'])?("class='".$item['linkOptions']['class']."'"):"")."".(isset($item['linkOptions']['method'])?("data-method='".$item['linkOptions']['method']."'"):"")." href='".Yii::$app->request->BaseUrl."/index.php?r=".$item['url']."'>".$item['label']."</a></li>";
			}
		}    	
    }

	public function run() {
		return $this->render ( 'view',['menu'=>$this->menu,'theme'=>$this->theme,'logo'=>$this->logo] );
	}
}