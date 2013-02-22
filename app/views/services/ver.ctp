<?php

echo $this->element('top');
if($item){
echo $resize->resize('/'.$item[$_m[0]]['src'],array('w'=>647)),

	 $html->tag('br',''),
	 $html->tag('h1',$item[$_m[0]]['nombre'],'title2'),
	 $html->tag('div',$item[$_m[0]]['descripcion'],'desc');


}

?>
</div>
</div><!-- .content -->
<?php echo $this->element('sidebar'); ?>