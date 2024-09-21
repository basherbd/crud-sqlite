<?php 
header('Refresh:3;url=view-courses.php');
//Database
require_once('db-config.php');

//Update Student 


//Include Database
require_once('./db-config.php');

$name = $_POST['name'] ;
$duration = $_POST['duration'];
$fee = $_POST['fee'];
$id = $_POST['id'];


$sql ="update course set name=\"$name\",duration=$duration,fee=$fee where id=$id";
   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), "Course  Record updated successfully\n";
   }


