<?php 
require_once './models/Employee.php';
require_once './database/db.php'; // Ensure you include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = $_POST;

    $employee = new Employee($conn);
    $query = 'INSERT INTO employee ( first_name, last_name, display_name, email, password) 
              VALUES ( ?, ?, ?, ?, ?)';
    $values = [
        $data['first_name'],
        $data['last_name'],
        $data['display_name'], // Ensure this matches the form input name
        $data['email'],
        $data['password']
    ];              

    $result = $employee->StoreEmployees($query, $values);
    
    if ($result) {
        // echo "Employee successfully added!";
        require_once './controllers/pages/HomeController.php';
    } else {
        echo "Failed to store employee.";
    }
}
?>