<?php
 require 'db.php';
 $sql = 'SELECT * FROM info';

 $state = $connection->prepare($sql);
 $state->execute();
 $info = $state->fetchAll(PDO::FETCH_OBJ);


?>
<?php require 'header.php' ?>
<div class="container col-sm-12">
<div class="card  " style="margin-top: 15px; margin-left: 50px;
    margin-right: 50px;" >
<div class="card-header">
	<h3>Details</h3>
</div>

	 <table class="table table-hover col-sm-12  ">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Fisrt Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Cell</th>
      <th scope="col">Shirt Size</th>
      <th scope="col">About</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach ($info as  $inf): ?>
    <tr>
     
      <td><?= $inf->Email ?></td>
      <td><?= $inf->FirstName ?></td>
      <td><?= $inf->LastName ?></td>
      <td><?= $inf->Phn ?></td>
      <td><?= $inf->Size ?></td>
      <td><?= $inf->About ?></td>
       <td>
          <a href="edit.php?id=<?= $inf->id ?>" class="btn btn-info" >Edit</a>
          <a onClick="return confirm( 'are you sure to want to delete it?')" href="delete.php?id=<?= $inf->id ?>" class="btn btn-danger"  >delete</a>
       </td>
       

    </tr>
     <?php endforeach; ?>
  </tbody>
</table>    
</thead>
</div>
</div>
</div>



<?php require 'footer.php' ?>

   