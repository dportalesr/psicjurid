<?php
echo
	$this->element('top'),
	$html->div('clear'),
		$html->div('form'),
			$html->div('title title2','Ponte en Contacto'),
			$html->para('note',''),
	
			$form->create('Contact',array('id'=>'ContactForm','url'=>'/contacto/enviar')),
			$form->input('mail',array('div'=>'hide')),
			$html->div('subform'),
				$this->element('inputs',array(
					'formtag'=>false,
					'end'=>'Enviar',
					'after'=>$this->Captcha->input().$html->para('leydatos','Sus datos serán usados de acuerdo a los términos de la '.$html->link('Ley Federal de Protección de Datos Personales','http://dof.gob.mx/nota_detalle.php?codigo=5150631&fecha=05/07/2010',array('target'=>'_blank','rel'=>'nofollow'))),
					'schema'=>array(
						'producto'=> empty($this->data[$_m[0]]['producto']) ? 'skip':array()
					)
				)),
			'</div>',
		'</div>',
		$html->div('info'),
			$html->div('title title3','Oficinas'),
			$html->para(null,'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'),
			$html->para(null,'Sed diam nonummy nibh euismod tincidunt.'),
			$html->para(null,'laoreet dolore magna.'),
			/*
			$html->div('title title3','Cómo llegar'),
			$html->link($html->image('mapa.jpg'),'/img/mapa.jpg',array('class'=>'pulsembox mapa')),
			*/
		'</div>',
	'</div>',

	$moo->ajaxform('ContactForm');
?>
</div>
</div>