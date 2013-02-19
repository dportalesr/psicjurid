<div class="sidebar">
<div class="pad">
<?php
if(is_c('inicio',$this)){
	
}
echo
	$html->div('about_project'),
		$html->image('caracola.png',array('alt'=>'caracola.jpg')),
		$html->div('title title2','Proyecto SUBSEMUN'),
		$html->para(null,'Subsidio para la Seguridad Pública Municipal'),
	'</div>';

	if($tweets = Cache::read('tweets')){
		echo
			$html->div('tweets'),
				$html->div('title title2','Tuits Recientes'),
				$html->link('@psicjurid',Configure::read('Site.tw'),array('target'=>'_blank','rel'=>'nofollow','title'=>'Ver @psicjurid en Twitter.com')),
				$html->tag('ul');
			
				foreach ($tweets as $tw){
					echo $html->tag('li',$html->para('tweet_text',$this->Text->autolink($tw['text'])).$html->para('tweet_date',$util->fdate('%b %d, %I:%M %p',$tw['created_at'])));
				}

				echo '</ul>',
			'</div>';
	}

	echo
		$html->link('Visita nuestro Facebook',Configure::read('Site.tw'),array('class'=>'visit_our_facebook title title1','target'=>'_blank','rel'=>'nofollow')),
		$html->div('logos'),
			$html->link('Somos más haciendo paz','http://',array('class'=>'somos_mas','target'=>'_blank','rel'=>'nofollow')),
			$html->link('OPREVIDEM','http://',array('class'=>'oprevidem','target'=>'_blank','rel'=>'nofollow')),
			$html->link('ProSeguridad','http://',array('class'=>'proseguridad','target'=>'_blank','rel'=>'nofollow')),
		'</div>';
?>
</div>
</div>