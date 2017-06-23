<?php 
	// load required files
	require "./../lib/Slim/Slim.php";
	require "./../lib/RedBean/rb.php";
	
	// set up database connection
	R::setup('mysql:host=localhost;dbname=pdssmooth','pdssmooth','mIXMnwIÖ004qM@RC');
	//R::setup('mysql:host=localhost;dbname=pdssmooth','root','');
	R::freeze(true);
	
	// include all files!
	foreach (glob("controller/handler/*.php") as $filename) { include $filename; }
	
	// register Slim auto-loader
	\Slim\Slim::registerAutoloader();
	
	// load the handlers
	$hSurveyHandler = new SurveyHandler();
	$hSurveyProjectHandler = new SurveyProjectHandler();
	
	// and create the Slim App
	$app = new \Slim\Slim(array(
			'templates.path' => './view'
			));
	
	// define the routes!
	
	$app->get("/",										$hSurveyHandler->showIntro($app));
	$app->get("/survey/",								$hSurveyHandler->showSurvey($app));
	$app->post("/survey/result/", 								$hSurveyHandler->showResult($app));
	
	
	$app->get("/projects/:project/",					$hSurveyProjectHandler->showIntro($app));
	$app->get("/projects/:project/survey/",				$hSurveyProjectHandler->showSurvey($app));
	$app->post("/projects/:project/survey/result", 		$hSurveyProjectHandler->showResult($app));
	
	// run the app
	$app->run();
?>