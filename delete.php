<?php 
 require 'db.php';

$id = $_GET['id'];
 $sql = 'DELETE  FROM info WHERE id=:id';
 $state = $connection->prepare($sql);
 if ( $state->execute([':id' => $id])) {
 	header("Location:index.php");
 }


?>
