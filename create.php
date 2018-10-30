<?php 
 require 'db.php';
 $msg ='';

 
 if (isset($_POST['Email']) && isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['Phn']) && isset($_POST['Size']) && isset($_POST['About']) ) {
 	
 	$Email =$_POST['Email'];
 	$FirstName =$_POST['FirstName'];
 	$LastName =$_POST['LastName'];
 	$Phn =$_POST['Phn'];
 	$Size =$_POST['Size'];
 	$About =$_POST['About'];
 	$sql = 'INSERT INTO info(Email,FirstName,LastName,Phn,Size,About) VALUES(:Email, :FirstName , :LastName , :Phn , :Size , :About)';
 	echo "<meta http-equiv='refresh' content='2'>";
 	$state = $connection->prepare($sql);
 	if ($state->execute([':Email' =>$Email, ':FirstName'=> $FirstName , 
 		':LastName'=> $LastName , ':Phn'=>$Phn , ':Size'=>$Size , ':About' =>$About])) {
 		$msg ='Data Inserted Successfully';
 	}
 	
 	
 }




?>


<?php require 'header.php' ?></div>
<div class="container col-md-4" style="margin-top: 10px;" >
    <div class="card " style="width: 25rem;">
  <h3 class="card-header">Your Info</h3>
  <div class="card-body">
  	
   <?php if (!empty($msg)): ?>
   	<div class="alert alert-success" >
   		<?php echo $msg; ?>
   	</div>
   	<?php endif; ?>
   	

   		
   	<form method="post">
    <div class="form-group">
      <label for="Email">Email address</label>
      <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter email" required="">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="FirstName">First Name</label>
      <input type="text" class="form-control" id="FirstName" placeholder="Enter First Name" name="FirstName" required="">
    </div>
    <div class="form-group">
      <label for="LastName">Last tName</label>
      <input type="text" class="form-control" id="LastName" placeholder="Enter Last Name" name="LastName" required="">
    </div>
    <div class="form-group">
      <label for="CellPhn">Phn </label>
      <input type="text" class="form-control" id="Phn" placeholder="Enter Phn No." name="Phn" required="">
    </div>    
    <div class="form-group">
      <label for="size">Shirt Size</label>
      <select class="form-control" id="Size" name="Size" required="">
        <option>Small</option>
        <option>Medium</option>
        <option>Large</option>
        <option>Extra Larger</option>
        
      </select> <div class="form-group">
      <label for="About">Where did your hear about this race?</label>
      <select class="form-control" id="About" name="About" required="">
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

