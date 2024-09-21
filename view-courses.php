<?php
   require_once('db-config.php');
   require_once('navbar.php');
   ?>
<div class="container">
	<h3 class="page-title">Course List
      <a href="add-course.php" class="btn btn-success float-right">
      	Add Course
      </a>
	</h3>

  <!-- Table --->
   <table class="table table-bordered table-striped">
   	<tr>
   		<th>ID</th>
   		<th>Name</th>
   		<th>Duration</th>
   		<th>Fee</th>
   		<th>Action</th>
   	</tr>
<?php

$sql ="Select * from course";

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) 
   {
      ?>
        <tr>
	   		<td><?=$row['id'];?></td>
	   		<td><?=$row['name'];?></td>
	   		<td><?=$row['duration'];?></td>
	   		<td><?=$row['fee'];?></td>
	   		<td>
	   			<a href="edit-course.php?id=<?=$row['id'];?>" class="btn btn-primary">
	   				Edit
	   			</a>

	   			<a href="delete-student.php?roll=<?=$row['id'];?>" class="btn btn-danger">
	   				Delete
	   			</a>
	   		</td>
	   	</tr>
      <?php
   }



?>

   	
   </table>

 <!-- Table End --->
</div>


	
</body>
</html>