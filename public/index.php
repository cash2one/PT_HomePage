<?php

$config = new Phalcon\Config\Adapter\Ini(__DIR__.'/../app/conf/config.ini');

$loader = new \Phalcon\Loader();
$loader->registerDirs(
	array(
		__DIR__.$config->application->controllersDir,
		__DIR__.$config->application->pluginsDir,
		__DIR__.$config->application->libraryDir,
		__DIR__.$config->application->modelsDir,
	)
)->register();

$di = new \Phalcon\DI\FactoryDefault();

/*
//We register the events manager
$di->set('dispatcher', function() use ($di) {
	$eventsManager = $di->getShared('eventsManager');
	$security = new Security($di);
	
	// * We listen for events in the dispatcher using the Security plugin
	$eventsManager->attach('dispatch', $security);
	$dispatcher = new Phalcon\Mvc\Dispatcher();
	$dispatcher->setEventsManager($eventsManager);
	return $dispatcher;
});
 */


 

// Database connection is created based in the parameters defined in the configuration file
$di->set('db', function() use ($config) {
       return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
	              "host" => $config->database->host,
	              "port" => $config->database->port,
                      "username" => $config->database->username,
                      "password" => $config->database->password,
                      "dbname" => $config->database->name
                                         ));
 });

//Setting up the view component
$di->set('view', function(){
	$view = new \Phalcon\Mvc\View();
	$view->setViewsDir('../app/views/');
	return $view;
});


$application = new \Phalcon\Mvc\Application();
$application->setDI($di);
echo $application->handle()->getContent();

//print the services
/*
$services = $application->getDI()->getServices();
foreach($services as $key => $service) {
	        var_dump($key);
		var_dump(get_class($application->getDI()->get($key)));
     }
exit();
 */
?>