<?php
#Router::connect('/:lang/:prefix/:controller/:action/*',array('lang'=>null,'prefix'=>null,'controller'=>'inicio','action'=>'index'),array('lang' => '[a-z]{3}','prefix'=>'admin|member'));
$regex = array(
	'pass'=>array('year','id'),
	//'sub'=>'[a-zA-Z0-9\-]+|^$',
	//'category'=>'[0-9]+_[a-zA-Z0-9\-]+|^$',
	'year'=>'[0-9]+',
	'id'=>'[0-9]+_[a-zA-Z0-9\-]+'
);

//route
	Router::connect('/proyectos/:year/:id',array('controller'=>'projects','action'=>'ver'),$regex);
	Router::connect('/proyectos/:year/:id/*',array('controller'=>'projects','action'=>'ver'),$regex);

foreach(Configure::read('Modules') as $controller => $mod){
	$alias = $mod['route'];
	Router::connect('/'.$alias,array('controller'=>$controller,'action'=>'index'));
	Router::connect('/'.$alias.'/:id',array('controller'=>$controller,'action'=>'ver'),$regex);
	Router::connect('/'.$alias.'/:id/*',array('controller'=>$controller,'action'=>'ver'),$regex);
	Router::connect('/'.$alias.'/:action/*',array('controller'=>$controller,'action'=>'index'),$regex);
	Router::connect('/admin/'.$alias,array('controller'=>$controller,'action'=>'index','admin'=>1));
	Router::connect('/admin/'.$alias.'/:action/*',array('controller'=>$controller,'action'=>':action','admin'=>1));
}

Router::connect('/',array('controller'=>'inicio','action'=>'index'));
Router::connect('/registro',array('controller'=>'members','action'=>'registro'));
Router::connect('/login',array('controller'=>'members','action'=>'login'));
Router::connect('/logout',array('controller'=>'members','action'=>'logout'));

Router::connect('/panel', array('controller' => 'users', 'action' => 'dashboard','admin'=>1));
Router::connect('/panel/logout',array('controller'=>'users','action'=>'logout','admin'=>1));
Router::connect('/panel/login',array('controller'=>'users','action'=>'login','admin'=>1));

Router::connectNamed(array('msg','page','limit','activo','tipo','favorito','detalle','full'),array('default'=>true));
?>