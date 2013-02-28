<?php
echo $this->element('top',array('header'=>'Proyecto SUBSEMUN'));
	
	if($item_txt)
		echo $html->div('desc tmce',$item_txt['Subsemun']['descripcion'].'');
	
	if($item){
		echo
			$html->div('detail'),
				$html->div('title title3',substr($item[$_m[0]]['fecha'],0,4)),
				$html->tag('h1',$item[$_m[0]]['nombre'],array('class'=>'title')),
				
				$this->element('slider',array('model'=>$_m[0].'img','data'=>$item[$_m[0].'img'],'skip'=>false,'title'=>'descripcion')),
				$html->div('clear'),
					$html->div('desc tmce',$item[$_m[0]]['descripcion'].''),
					$this->element('share'),
				'</div>';

			if(!empty($item['Document'])){
				echo
					$html->tag('p','Descargables','download'),
					$html->tag('ul');

				foreach ($item['Document'] as $down) {
					echo $html->tag('li',$html->link($down['nombre'],array('controller'=>'documents','action'=>'download',$down['id']),array('class'=>'link-download')));
				}

				echo '</ul>';
			}
		
		echo '</div>'; // .detail
	}
?>
</div>
</div><!-- .content -->
<?php echo $this->element('sidebar'); ?>