<?php
App::import('Controller','_base/Section');
class AboutController extends SectionController {
	var $name = 'About';
	var $uses = array('About','Researcher');

	function index(){
		$this->About->find('first');
		$this->set('texto',$this->About->field('mision'));
	}
	

	function vision(){
		$this->About->find('first');
		$this->set('texto',$this->About->field('vision')); 
		$this->render('/about/index');
	}
	function organigrama(){
		$item = $this->m[0]->find_(array('contain'=>false,'fields'=>array('organigrama','src')),'first');
		$researchers = $this->Researcher->find_();
		$this->set(compact('item','researchers'));



		fb($researchers);
	}


}
?>