<?php
App::import('Controller','_base/Items');
class ResearchersController extends ItemsController{
	var $name = 'Researchers';
	var $uses = array('Researcher');

	function download($id = false, $field = 'src'){
		$this->_download($id,$field);
	}

}



?>