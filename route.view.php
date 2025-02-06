<?php 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$router = [
    '/' => './controllers/pages/HomeController.php',
    '/create' => './controllers/pages/CreateController.php',
    '/404' => 'Not Found',
    '/store/employees' => './controllers/handlers/StoreEmployeeController.php'
];
if (array_key_exists($uri, $router)) {
    require_once($router[$uri]);
}
else{
    echo "404 Not Found";
}
?>