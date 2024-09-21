<?php
   require_once('db-config.php');
   require_once('navbar.php');
   ?>
<div class="container">
	<h3 class="page-title"> Update Student
      <a href="view-students.php" class="btn btn-success float-right">
      	 Student List
      </a>
	</h3>

   <?php
   
   $roll = $_GET['roll'];
   $sql ="Select * from student where roll_no=$roll";
   $ret = $db->query($sql);
   $row = $ret->fetchArray(SQLITE3_ASSOC);
   

   ?>

<form action="update-student.php" method="post">
   <input type="hidden" name="roll" value="<?=$row['roll_no']?>">
   <div class="form-group">
      <label>Student Name</label>

      <input type="text" class="form-control" name="name" value="<?=$row['name']?>">

   </div>

   <div class="form-group">
      <label>Student Marks</label>

      <input type="text" class="form-control" name="marks" value="<?=$row['marks']?>">

   </div>

   <button type="submit" class="btn btn-info">Save</button>



</form>


  
</div>


	
</body>
</html>