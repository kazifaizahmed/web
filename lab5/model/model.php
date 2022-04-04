<?php 

require_once 'db_connect.php';



function signup($data){
	$conn = db_conn();

    $sql = "INSERT INTO pro (Name, Email, Address, Gender) VALUES (:Name, :Email, :Address, :Gender)";
    try{
        $stmt = $conn->prepare($sql);
        $stmt->execute([

  ':Name' => $data['Name'],
  ':Email' => $data['Email'],
  ':Address' => $data['Address'],
  ':Gender' => $data['Gender'],

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

