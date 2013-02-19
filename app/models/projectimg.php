<?php
class Projectimg extends AppModel {
	var $name = 'Projectimg';
	var $actsAs = array('File'=>array('portada'=>'project_id'));
	var $belongsTo = array(
		'Project' => array(
			'className'=>'Project',
			'counterCache' => true
		)
	);
}
?>