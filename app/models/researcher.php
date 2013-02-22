<?php
class Researcher extends AppModel {
	var $name = 'Researcher';
	var $labels = array(
		'src'=>'Foto',
		'cv'=>'Curriculum Vitae',
		'pubs'=>'Publicaciones'
	);
	var $skipValidation = array('src');
	var $validate = array();
	var $actsAs = array('File' => array(
		'portada'=>false,
		'fields'=>array(
			'src',
			'cv'=>array('maxsize'=>5120000,'types'=>'docx|doc|pdf'),
			'pubs'=>array('maxsize'=>5120000,'types'=>'docx|doc|pdf'),
		)
	));



}
?>