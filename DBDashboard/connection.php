<?php
 $dbName = "dashboard";
 $userName = "root";
 $server = "localhost";
 $password = "";
 try {
     $conn = new PDO("mysql:host=$server;dbname=$dbName", $userName, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
 } catch (PDOException $e) {
     die("Connection failed: " . $e->getMessage());
 }
 $query="SELECT * FROM `users`";
 $stmt = $conn->prepare($query);
 $stmt->execute();
 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
   


?>