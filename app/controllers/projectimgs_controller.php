<?php
App::import('Controller','_base/Imgs');
class ProjectimgsController extends ImgsController{
	var $name = 'Projectimgs';
	var $uses = array('Projectimg','Project');
}
?>