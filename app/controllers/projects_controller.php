<?php
App::import('Controller','_base/Unlisteditems');
class ProjectsController extends UnlisteditemsController{
	var $name = 'Projects';
	var $uses = array('Project','Subsemun');

	function ver($year = false, $id = false){
		//fb($id,'$id');fb($year,'$year'); fb($this->params,'$this->params');
		$id = $this->_checkid($id,false);
		$this->m[0]->id = $id;
		
		if($id !== false && $this->m[0]->exists()){
			parent::ver($id);

			$this->set('current_year_list',$this->get_projects_by_year($year));
			
		} elseif($item = $this->m[0]->find_(null,'first')){
			$this->redirect(array('year'=>substr($item[$this->uses[0]]['fecha'],0,4),'id'=>$item[$this->uses[0]]['slug']));
			exit;

		} else {
			$this->set('items',false);
			$this->detour('_base','index');
		}

		$this->set(compact('year'));
		$item_txt = $this->Subsemun->find_(array('contain'=>false),'first');
		$this->set(compact('item_txt'));

	}

	function get_projects_by_year($year){
		$year = (int)$year;
		if(($projects = Cache::read('project_'.$year)) === false){
			$projects = $this->Project->find_(array(
				'contain'=>false,
				'fields'=>array('id','nombre','slug','fecha'),
				'conditions'=>array('YEAR(fecha)'=>$year)
			));

			Cache::write('project_'.$year,$projects);
		}
		$this->set(compact('projects'));

		if(!empty($this->params['isAjax'])){
			$this->render('/elements/projects_by_year');
		} else {
			return $projects;
		}
	}


}
?>