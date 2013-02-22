<?php
App::import('Controller','_base/Unlisteditems');
class ServicesController extends UnlisteditemsController{
	var $name = 'Services';
	var $uses = array('Service');


	function ver($id=null,$all=null){


		$limit=$all?'0':'5';

		$services=$this->Service->find('all',array('contain'=>false,'fields'=>array('id','nombre','slug'),'order'=>'Service.created DESC','limit'=>$limit));
		$this->set('services',$services);

		parent::ver($id);

	}



}
?>