<?php
App::import('Controller','_base/Categorizeditems');
class DocumentsController extends CategorizeditemsController{
	var $name = 'Documents';
	var $uses = array('Document');

	function admin_index() {
		$this->paginate[$this->uses[0]] = array('limit'=>25,'order'=>$this->uses[0].'.created DESC, '.$this->uses[0].'.id DESC');
		$find = array('project_id'=>$this->params['named']['project_id']);

		//// Buscador
		if($this->data){
			if(isset($this->data['action']) && $this->data['action']=='reset'){
				$this->data['q'] = '';
			} elseif(isset($this->data['q']) && $this->data['q']) {
				$this->redirect(array(
					'q'=>b64($this->data['q'])
				));
			}
			
			if(isset($this->data['todelete']) && $this->data['todelete']){
				$msg = $this->m[0]->deleteAll(array($this->uses[0].'.id'=>array_keys(array_filter($this->data['todelete']))),true,true) ? 'ok':'some';
				$this->_flash('delete_'.$msg);
			}
			
		} elseif(isset($this->params['named']['q'])) {
			$q = b64($this->params['named']['q'],1);
			
			if(is_numeric($q)){
				$find[$this->uses[0].'.id'] = $q;
			} elseif($this->m[0]->hasField($this->m[0]->displayField)){
				$find[$this->uses[0].'.'.$this->m[0]->displayField.' LIKE'] = '%'.$q.'%';
			}

			$this->data['q'] = $q;
		}

		/////
		
		$items = $this->paginate($this->uses[0],$find);
		
		if($this->m[0]->belongsTo){
			$parentModels = array_keys($this->m[0]->belongsTo);
			foreach($parentModels as $parent){
				if(in_array($parent, $this->uses)) # SHOULD be true
					$this->paginate($parent);
			}
		}
		
		$this->data['todelete'] = array();

		$project_name = $this->Document->Project->field('nombre',array('id'=>$this->params['named']['project_id']));
		
		$this->set(compact('project_name','items'));
	}
	
}
?>