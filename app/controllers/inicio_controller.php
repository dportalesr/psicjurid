<?php
App::import('Controller','_base/My');
class InicioController extends MyController {
	var $name = 'Inicio';
	var $uses = array('Carousel','About','Servicio','Event','Album');

	function index(){
		$carrusel = $this->Carousel->find_();
		$about = $this->About->find_(array('fields'=>array('intro')),'first');
		$service = $this->Servicio->find_(array('contain'=>false,'cache'=>true,'limit'=>1));
		$event = $this->Event->find_(array('contain'=>false,'cache'=>true,'limit'=>1));

		$this->set(compact('carrusel','about'));
		$this->pageTitle = Configure::read('Site.slogan');
		
	}
	
	function email(){ $this->layout = 'empty'; }
}
?>