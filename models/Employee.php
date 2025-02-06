<?php 
 Class Employee{
    private $display_name;
    private $conn;
    private $first_name;
    private $last_name;
    private $email;
    private $passwords;
    private $role_id;
public function __construct($db){
    $this->conn = $db;
}
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
public function StoreEmployees($query,$data){
    try{
        $smtm = $this->conn->prepare($query);
       $result = $smtm->execute($data);
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

 }

?>