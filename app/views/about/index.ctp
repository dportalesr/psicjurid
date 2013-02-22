<?php
echo $this->element('top');


if($texto) echo $html->div('desc',$texto,array('id'=>'aboutText'));
?>
</div>
</div>
<?php echo $this->element('sidebar'); ?>