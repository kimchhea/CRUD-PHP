<?php 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$router = [
    '/' => './controllers/pages/HomeController.php',
    '/create' => './controllers/pages/CreateController.php',
    '/Delete' =>  './controllers/handlers/DeleteEmployee.php',
    '/Edit' => './controllers/pages/EditController.php',
    '/Updata/employee' => './controllers/handlers/EditEmployeeController.php',
    '/404' => 'Not Found',
    '/store/employees' => './controllers/handlers/StoreEmployeeController.php'
];
$uriPart = explode('/', trim($uri, '/'));
if (array_key_exists($uri, $router)) {
    require_once($router[$uri]);
}
elseif($uriPart[0]=== 'Edit' && isset($uriPart[1]) && is_numeric($uriPart[1])) {
$_POST['employees_id'] = $uriPart[1];

require_once './controllers/pages/EditController.php';
}
