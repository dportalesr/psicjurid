<?php
echo $this->element('top');
	
	if($items){
		foreach($items as $item)
			echo $this->element('th',array('item'=>$item,'v'=>1,'layout'=>array('img','nombre')));
			
		echo $this->element('pages');
	} else 
		echo $html->para('noresults','No hay elementos que mostrar');
?>
</div>
</div><!-- .content -->
<?php echo $this->element('sidebar'); ?>