<?php
App::import('Controller','_base/Unlisteditems');
class ProjectsController extends UnlisteditemsController{
	var $name = 'Projects';
	var $uses = array('Project','Subsemun');

	function ver($id = false){
		parent::ver($id);
		$item_txt = $this->Subsemun->find_(array('contain'=>false),'first');
		$this->set(compact('item_txt'));

	}


}
?>