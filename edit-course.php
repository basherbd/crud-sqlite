<?php
   require_once('db-config.php');
   require_once('navbar.php');
   ?>
<div class="container">
	<h3 class="page-title"> Update Course
      <a href="view-courses.php" class="btn btn-success float-right">
      	 Course List
      </a>
	</h3>

   <?php
   
   $id = $_GET['id'];
   $sql ="Select * from course where id=$id";
   $ret = $db->query($sql);
   $row = $ret->fetchArray(SQLITE3_ASSOC);
   

   ?>

<form action="update-course.php" method="post">
   <input type="hidden" name="id" value="<?=$row['id']?>">
   <div class="form-group">
      <label>Course Name</label>

      <input type="text" class="form-control" name="name" value="<?=$row['name']?>">

   </div>

   <div class="form-group">
      <label>Duration</label>

      <input type="text" class="form-control" name="duration" value="<?=$row['duration']?>">

   </div>

   <div class="form-group">
      <label>Fee</label>

      <input type="text" class="form-control" name="fee" value="<?=$row['fee']?>">

   </div>

   <button type="submit" class="btn btn-info">Save</button>



</form>


  
</div>


	
</body>
</html>