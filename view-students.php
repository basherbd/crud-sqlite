<?php
   require_once('db-config.php');
   require_once('navbar.php');
   ?>
<div class="container">
	<h3 class="page-title">Student List
      <a href="add-student.php" class="btn btn-success float-right">
      	Add Student
      </a>
	</h3>

  <!-- Table --->
   <table class="table table-bordered table-striped">
   	<tr>
   		<th>ROll No</th>
   		<th>Name</th>
   		<th>Marks</th>
   		<th>Action</th>
   	</tr>
<?php

$sql ="Select * from student";

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) 
   {
      ?>
        <tr>
	   		<td><?=$row['roll_no'];?></td>
	   		<td><?=$row['name'];?></td>
	   		<td><?=$row['marks'];?></td>
	   		<td>
	   			<a href="edit-student.php?roll=<?=$row['roll_no'];?>" class="btn btn-primary">
	   				Edit
	   			</a>

	   			<a href="delete-student.php?roll=<?=$row['roll_no'];?>" class="btn btn-danger">
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