<?php
echo
	$this->element('top'),
	$html->div('clear'),
		$html->div('form'),
			$html->div('title title2','Para cualquier duda o aclaración, no dudes en contactarnos, estamos para servirle.'),
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
	'</div>',

	$moo->ajaxform('ContactForm');
?>
</div>
</div>
<?php echo $this->element('sidebar'); ?>