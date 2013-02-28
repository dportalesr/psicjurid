<?php
echo $this->element('top');

if($item){
	echo
		$resize->resize('/'.$item[$_m[0]]['src'],array('w'=>647)),
		$html->tag('h1',$item[$_m[0]]['nombre'],'title2 title'),
		$html->div('desc tmce',$item[$_m[0]]['descripcion'].'');
}
?>
</div>
</div><!-- .content -->
<?php echo $this->element('sidebar'); ?>