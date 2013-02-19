<?php
echo
	$html->div('footer'),
	$html->div('center'),
		$html->para(null,'Calle 14 No. 114, 2do piso x Av. Cupules. Col. García Ginerés. CP. 97070. Email: '.$util->ofuscar('info@psicjurid.com'),array('id'=>'direccion')),
		$html->para(null,'Tel. '.$html->tag('span','01 (999) 920.90.70'),array('id'=>'telefono'));
?>
</div><!-- .center -->
</div><!-- .footer -->