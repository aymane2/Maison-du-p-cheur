<?php
try{
    $pdo = new PDO ("mysql:host=localhost;dbname=user","root","");
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "connected";
    
    $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
    }catch(PDOException $e){
    die ("error: could not connect" . $e-> getMessage());
    }
  
  try{
  
    $sql = "INSERT INTO logine (email, password, name) 
    
    VALUES (:email, :password, :name)";
    $stmt = $pdo->prepare($sql);
  
       $stmt->bindParam(':name', $_REQUEST['name']);
       $stmt->bindParam(':email', $_REQUEST['email']);
       $stmt->bindParam(':password', $_REQUEST['password']);
  
    $stmt->execute();
  
		header("location:index.php");
    
  }catch(PDOExecption $e){
    die("error :" .$e->getMessage());
  }
  

?>