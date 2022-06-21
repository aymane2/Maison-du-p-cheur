<?php
try{
    $pdo = new PDO ("mysql:host=localhost;dbname=checkout","root","");
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
    }catch(PDOException $e){
    die ("error: could not connect" . $e-> getMessage());
    }
  
  try{
  
    $sql = "INSERT INTO clients (nom, prenom, username, email, addres_s, address_2, pays, ville, code_postal) 
    
    VALUES (:nom, :prenom, :username, :email, :addres_s, :address_2, :pays, :ville, :code_postal)";
    $stmt = $pdo->prepare($sql);
  
       $stmt->bindParam(':nom', $_REQUEST['nom']);
       $stmt->bindParam(':prenom', $_REQUEST['prenome']);
       $stmt->bindParam(':username', $_REQUEST['usernamee']);
       $stmt->bindParam(':email', $_REQUEST['emaile']);
       $stmt->bindParam(':addres_s', $_REQUEST['addresse']);
       $stmt->bindParam(':address_2', $_REQUEST['address_2e']);
       $stmt->bindParam(':pays', $_REQUEST['payse']);
       $stmt->bindParam(':ville', $_REQUEST['villee']);
       $stmt->bindParam(':code_postal', $_REQUEST['code_postale']);
  
    $stmt->execute();
  
    echo "Votre Commande a été bien enregistré !";
  
  }catch(PDOExecption $e){
    die("error :" .$e->getMessage());
  }
  

?>