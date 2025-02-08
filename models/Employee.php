<?php 
 Class Employee{
    private $display_name;
    private $conn;
    private $first_name;
    private $last_name;
    private $email;
    private $passwords;
    private $phone_number;
    private $role_id;
// constructor  that used for initialization the connection of data base
public function __construct($db){
    $this->conn = $db;
}
// function that used for get all the employees  from the database
public function GetAllEmployees($query){
try{
    $data = $this->conn->prepare($query);
    $data->execute();
    return $data->fetchAll();
}
catch(Exception $e){
     echo $e->getMessage();
}
}
//function that used for store the data of employees
public function StoreEmployees($query,$data){
    try{
       $stmt = $this->conn->prepare($query);
       $result = $stmt->execute($data);
       if ($result) {
        return true; // Successful insertion
    } else {
        return false; // Failed insertion
    }
    }

    catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    }
}
//function that used for delete the data of employees
public function DeleteEmployees($employee_id){
    try {
        $query = "DELETE FROM employee WHERE employee_id = :employee_id";
        $stmt = $this->conn->prepare($query);

        // Bind the parameter
        $stmt->bindParam(':employee_id', $employee_id, PDO::PARAM_INT);
        $result = $stmt->execute();
        return $result; 

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false; // Return false in case of an error
    }
}
//function that used for update the data of employees

 }

?>