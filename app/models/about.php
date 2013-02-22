<?php
class About extends AppModel {
	var $name = 'About';
	var $labels = array('src'=>'Imagen Organigrama');
	var $useTable = 'about';
	var $actsAs = array('File' => array('portada'=>false,'fields'=>array('src'=>array('maxsize'=>512000))));
	var $skipValidation = array('src');

	function beforeValidate(){
		$this->clean($this->data,false,array('mision','vision','organigrama','intro'));

		return true;
	}
}
?>