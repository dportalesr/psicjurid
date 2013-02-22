<?php
echo $this->element('top');




if($item) 
	echo 
		$html->div('desc',$item[$_m[0]]['organigrama']),
			$resize->resize('/'.$item[$_m[0]]['src'],array('w' =>'647','atts'=>array('class'=>'front')));

if($researchers){
	echo $html->div('researchers'),
	$html->tag('ul'),
	$html->tag('h2','Nuestros Investigadores','title2');

		foreach ($researchers as $r) {

			$pair=$i++%2==0?'pair':'';
			echo
				'<li class="'.$pair.'">',
					$util->th($r,'Researcher',array('w' =>'56','h'=>59,'class'=>'thumb')),
					$html->link('CV',array('controller'=>'researchers','action'=>'download',$r['Researcher']['id'],'cv'),array('class'=>'cv')),
					$html->link('Publicaciones',array('controller'=>'researchers','action'=>'download',$r['Researcher']['id'],'pubs'),array('class'=>'')),
					$html->tag('h3',$r['Researcher']['nombre'].' '),
					$html->tag('h4',$r['Researcher']['puesto'].' '),

				'</li>';

		}
	echo '</ul>
		</div>';

}

?>
</div>
</div>
<?php echo $this->element('sidebar'); ?>