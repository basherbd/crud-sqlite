<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student List</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">

  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
 
 <!-- Navbar---->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Student Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view-students.php">Student List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="courses.php">Courses</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="search.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<!--- Navbar END--->