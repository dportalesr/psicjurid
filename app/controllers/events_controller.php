<?php
App::import('Controller','_base/Items');
class EventsController extends ItemsController{
	var $name = 'Events';
	var $uses = array('Event');
}
?>