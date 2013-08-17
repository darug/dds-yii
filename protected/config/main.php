<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'DDS main',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'generate',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl'=>array('admin/login'),
		),
		// uncomment the following to enable URLs in path-format
		//* gii futtatasahoz kommentbe rakni 
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'	=> false,
			'rules'=>array(
				''											=>	'content/home',
				'admin/content/delete/id/<id:\d+>'			=>	'admin/content/delete',
				'admin/'									=>	'admin/admin/index',
				'admin/login'								=>	'admin/authentication/login',
				'admin/logout'								=>	'admin/authentication/logout',
				'<controller:\w+>/<id:\d+>'					=>	'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'	=>	'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'				=>	'<controller>/<action>',
				'<name:\w+>'								=>	'content/index',
			),
		),  // */ 
		'db'=>require(dirname(__FILE__) . '/db_prod.php'),
		'errorHandler'=>array(
			'errorAction'=>'content/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
					//'levels'=>'error, warning',
					'ipFilters'=>array('127.0.0.1'),
				),
				// uncomment the following to show log messages on web pages
				/* 
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);