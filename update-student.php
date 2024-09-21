<?php 
header('Refresh:3;url=view-students.php');
//Database
require_once('db-config.php');

//Update Student 


//Include Database
require_once('./db-config.php');

$name = $_POST['name'] ;
$marks = $_POST['marks'];
$roll = $_POST['roll'];


$sql ="update student set name=\"$name\",marks=$marks where roll_no=$roll ";
   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), "Student  Record updated successfully\n";
   }


