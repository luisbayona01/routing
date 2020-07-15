<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');



//require  dirname("/routes/request/Request.php");
//require';
require dirname(__FILE__)."/routes/request/Request.php";
require dirname(__FILE__)."/routes/route/Router.php";  

  $request=new Request();
  $router= new Router($request);
  
try {
  $router->loadRoutes('routes/routes.php')->match(); 
  $router->dispatch();  
  
  } catch (Exception $e) {
  	echo   $e->getMessage();
  }

