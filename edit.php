<?php 
 require 'db.php';
 $msg ='';
$id = $_GET['id'];
 $sql = 'SELECT * FROM info WHERE id=:id';
 $state = $connection->prepare($sql);
 $state->execute([':id' => $id]);
 $inf = $state->fetch(PDO::FETCH_OBJ); 
 if (isset($_POST['Email']) && isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['Phn']) && isset($_POST['Size']) && isset($_POST['About']) ) {
 	
 	$Email =$_POST['Email'];
 	$FirstName =$_POST['FirstName'];
 	$LastName =$_POST['LastName'];
 	$Phn =$_POST['Phn'];
 	$Size =$_POST['Size'];
 	$About =$_POST['About'];
 	$sql = 'UPDATE info  SET Email=:Email, FirstName=:FirstName , LastName=:LastName , Phn=:Phn , Size=:Size , About=:About WHERE  id=:id ';
 	echo "<meta http-equiv='refresh' content='2'>";
 	$state = $connection->prepare($sql);
 	if ($state->execute([':Email' =>$Email, ':FirstName'=> $FirstName , 
 		':LastName'=> $LastName , ':Phn'=>$Phn , ':Size'=>$Size , ':About' =>$About , ':id' =>$id])) {
 		header("Location:index.php");
 	}
 	
 	
 }




?>


<?php require 'header.php' ?></div>
<div class="container col-md-4" style="margin-top: 10px;" >
    <div class="card " style="width: 25rem;">
  <h3 class="card-header">Update!</h3>
  <div class="card-body">
  	
   <?php if (!empty($msg)): ?>
   	<div class="alert alert-success" >
   		<?php echo $msg; ?>
   	</div>
   	<?php endif; ?>
   	

   		
   	<form method="post">
    <div class="form-group">
      <label for="Email">Email address</label>
      <input value="<?= $inf->Email; ?>" type="email" class="form-control" name="Email" aria-describedby="emailHelp" placeholder="Enter email" required="">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="FirstName">First Name</label>
      <input value="<?= $inf->FirstName; ?>" type="text" class="form-control" id="FirstName" placeholder="First Name" name="FirstName" required="">
    </div>
    <div class="form-group">
      <label for="LastName">Last tName</label>
      <input value="<?= $inf->LastName; ?>" type="text" class="form-control" id="LastName" placeholder="Last Name" name="LastName" required="">
    </div>
    <div class="form-group">
      <label for="CellPhn">Phn Phn</label>
      <input value="<?= $inf->Phn; ?>" type="text" class="form-control" id="Phn" placeholder="cell" name="Phn" required="">
    </div>    
    <div class="form-group">
      <label for="size">Shirt Size</label>
      <select value="<?= $inf->Size; ?>" class="form-control" id="Size" name="Size" required="">
        <option>Small</option>
        <option>Medium</option>
        <option>Large</option>
        <option>Extra Larger</option>
        
      </select> <div class="form-group">
      <label for="About">Where did your hear about this race?</label>
      <select value="<?= $inf->About; ?>" class="form-control" id="About" name="About" required="">
        <option>TV</option>
        <option>Social Media</option>
        <option>Newspaper</option>
        <option>Friend</option>
        
      </select>
    </div>
    
    <button type="submit"  id="submit" name="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
  
  </div>
  
  
  
</div>
</div>





<?php require 'footer.php' ?>

