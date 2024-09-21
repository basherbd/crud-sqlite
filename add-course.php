<?php
   require_once('db-config.php');
   require_once('navbar.php');
   ?>
<div class="container">
	<h3 class="page-title"> Add course
      <a href="view-courses.php" class="btn btn-success float-right">
      	 Courses List
      </a>
	</h3>

<form action="save-course.php" method="post">
   <div class="form-group">
      <label>Course Name</label>

      <input type="text" class="form-control" name="name">

   </div>

   <div class="form-group">
      <label>Duration</label>

      <input type="text" class="form-control" name="duration">

   </div>

   <div class="form-group">
      <label>Fee</label>

      <input type="text" class="form-control" name="fee">

   </div>

   <button type="submit" class="btn btn-info">Save</button>



</form>


  
</div>


	
</body>
</html>