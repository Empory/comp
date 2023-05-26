<?php include "app/controllers/Home.php";
use Buki\Router\Router;?> 
<?php



require __DIR__ . '/vendor/autoload.php';

$router = new Router([
    "paths" => [
        "controllers" => "app/controllers",
        "middlewares" => "app/middlewares"
    ],
    "namespaces" => [
        "controllers" => "App\Controllers",
        "middlewares" => "App\Middlewares"
    ]
]);
$router->controller("/", "Home", [
    "before" => "CheckAuth"
]);
 
$router->get("/user/:slug?/:id?", function($username="not found",$id="not found"){
    return "user sayfası = ". $username . " = ".$id;
});
$router->run(); 
  