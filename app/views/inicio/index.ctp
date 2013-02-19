<?php
echo
	$this->element('showcase',array('data'=>$carrusel)),
	$html->div('content'),
	$html->div('pad');
		
		if($about){
			echo $html->div('intro desc',$about['About']['intro'].'');
		}

		echo $html->div('clear homeCols'),
			$html->div('col col50 services'),
				$html->div('title title1','Servicios');
				if($service)
					echo $this->element('th',array('item'=>$service));
			echo '</div>',
			$html->div('col col50 omega events'),
				$html->div('title title1','Eventos');
				if($event)
					echo $this->element('th',array('item'=>$event));
			echo '</div>',
		'</div>'; // .homeCols

		if($albums){
			echo
				$html->div('galeria'),
					$html->div('title title1','Galería'),
					$this->element('slider',array('data'=>$albums,'model'=>'Album','title'=>true,'redirect'=>true)),
				'</div>';
		}
?>
</div>
</div>
<?php echo $this->element('sidebar'); ?>