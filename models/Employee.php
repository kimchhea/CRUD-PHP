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
 }

?>