<?php
/* Warcumi @2018 */
// unfinished contact layout and blog
// script and code : puji ermanto

class Model {

    public function GO_Warcumi(){
        return array(
            'index'   => 'View/index.php',
			'nav'	  => 'View/assets/nav.php',
            'main'    => 'View/assets/main.php',
			'body'    => 'View/assets/body.php',
        );
    }

    public function GO_Style(){
		return array(
			'css1' => 'View/assets/css/style.css',
			'js1'  => 'View/assets/js/warcumi.js',
			'icon1' => 'View/assets/icon/banner.ico',
			'icon2' => 'View/assets/icon/desset.ico'
		);
    }
	
	public function GO_Contact(){
		return array(
			'contact'  => 'View/assets/contact/contact.php'
		);
	}
	
}
