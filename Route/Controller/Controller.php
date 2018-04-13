<?php
class Controller {
 
    public function __construct() {
        $model = new Model;
		//link untuk css
		$data_style   = $model->GO_Style();
		//layout contact
		$data_contact = $model->GO_Contact();
        require_once 'Route/View/View.php';
    }
 
}