<?php
try{
    $pdo = new PDO ("mysql:host=localhost;dbname=contact","root","");
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
    }catch(PDOException $e){
    die ("error: could not connect" . $e-> getMessage());
    }
  
    try{
  
        $sql = "INSERT INTO contacte (nom, prenom, email, phone, messagee) 
        
        VALUES (:nom, :prenom, :email, :phone, :messagee)";
        $stmt = $pdo->prepare($sql);
      
           $stmt->bindParam(':nom', $_REQUEST['nom']);
           $stmt->bindParam(':prenom', $_REQUEST['prenom']);
           $stmt->bindParam(':email', $_REQUEST['email']);
           $stmt->bindParam(':phone', $_REQUEST['phone']);
           $stmt->bindParam(':messagee', $_REQUEST['messagee']);

        $stmt->execute();
      
        echo "			Thanks! Your message has been sent. We will get back to you soon!
        ";
      
      }catch(PDOExecption $e){
        die("error :" .$e->getMessage());
      }
    ?>