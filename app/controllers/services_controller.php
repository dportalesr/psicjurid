<?php
App::import('Controller','_base/Unlisteditems');
class ServicesController extends UnlisteditemsController{
	var $name = 'Services';
	var $uses = array('Service');

	function ver($id = null){
		$full = empty($this->params['named']['full']) ? 5 : false;
		$conds = array('contain'=>false,'fields'=>array('id','nombre','slug'));
		
		if($full)
			$conds['limit'] = $full;

		$services = $this->Service->find_($conds);
		$this->set(compact('services','full'));

		parent::ver($id);
	}
}
?>