<?php
   require_once('db-config.php');
   require_once('navbar.php');
   ?>
<div class="container">
	<h3 class="page-title"> Add Student
      <a href="view-students.php" class="btn btn-success float-right">
      	 Student List
      </a>
	</h3>

<form action="save-student.php" method="post">
   <div class="form-group">
      <label>Student Name</label>

      <input type="text" class="form-control" name="name">

   </div>

   <div class="form-group">
      <label>Student Marks</label>

      <input type="text" class="form-control" name="marks">

   </div>

   <button type="submit" class="btn btn-info">Save</button>



</form>


  
</div>


	
</body>
</html>