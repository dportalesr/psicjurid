<?php
App::import('Controller','_base/Items');
class ProjectsController extends ItemsController{
	var $name = 'Projects';
	var $uses = array('Project');
}
?>