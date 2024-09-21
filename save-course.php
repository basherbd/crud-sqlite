<?php
header('Refresh:3;url=view-courses.php');
//Include Database
require_once('./db-config.php');

$name = $_POST['name'] ;
$duration = $_POST['duration'];
$fee = $_POST['fee'];

 $sql ="insert into course(id,name,duration,fee)
values(NULL,\"$name\",$duration,$fee)";

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Course record created successfully\n";
   }


