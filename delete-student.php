<?php 
header('Refresh:3;url=view-students.php');
//Database
require_once('db-config.php');

//DElete Student 


//Include Database
require_once('./db-config.php');


$roll = $_GET['roll'];


$sql ="delete from student where roll_no=$roll ";
   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), "Student  Record deleted successfully\n";
   }


