<?php
if($projects){
	foreach ($projects as $pj) {
		$class = '';
		if((!empty($this->params['id'])) && $pj['Project']['id'] == (int)$this->params['id'])
			$class = 'mSelected';

		echo $html->tag('li',$html->link($pj['Project']['nombre'],array('controller'=>'projects','action'=>'ver','year'=>substr($pj[$_m[0]]['fecha'],0,4),'id'=>$pj[$_m[0]]['slug']),compact('class')));
	}
} else {
	echo $html->tag('li','No hay elementos que mostrar','noresults');
}
?>