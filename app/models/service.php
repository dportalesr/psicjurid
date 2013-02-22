<?php
class Service extends AppModel {
	var $name = 'Service';
	var $labels = array('src'=>'Imagen');
	var $validate = array();
	var $actsAs = array('File' => array('portada'=>false,'fields'=>array('src'=>array('maxsize'=>512000))));
	var $skipValidation = array('src');


	



}
?>