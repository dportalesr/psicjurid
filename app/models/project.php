<?php
class Project extends AppModel {
	var $name = 'Project';
	var $labels = array();
	var $skipValidation = array();
	var $validate = array();

	var $hasMany = array(
		'Document'=>array(
			'className'=>'Document',
			'dependent'=>true
		),
		'Projectimg'=>array(
			'className'=>'Projectimg',
			'dependent'=>true
		)
	);

	var $hasOne = array(
		'Projectportada'=>array(
			'className'=>'Projectimg',
			'foreignKey'=>'project_id',
			'conditions'=>'Projectportada.portada = 1'
		)
	);

}
?>
