<!--------  view students  -------->
<!doctype html>
 <html>
  <head>
      <title>admin</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
  </head>
  <body>
  <div>
		<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="adminhome.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addcourse.php">
                <i class="fas fa-home"><p> AddCourse</p></i>
              </a>
			<li class="nav-item ">
              <a class="nav-link " href="registerstudents.php">
                <i class="fas fa-home"><p> AddStudents</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addsubject.php">
                <i class="fas fa-home"><p> AddSubjects</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addmarks.php">
                <i class="fas fa-home"><p> AddMarks</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="addtimetable.php">
                <i class="fas fa-home"><p> Timetable</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewstudents.php">
                <i class="fas fa-home"><p> ViewStudents</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="login.php">
                <i class="fas fa-home"><p> Logout</p></i>
              </a>
            </li>
          </ul>

        </nav>
		</div>
		<div>
		<table class="table table-striped card-text bg-light">
		<thead>
			<tr>
				<th>Sid</th>
				<th>RegisterNo</th>
				<th>Name</th>
				<th>Mobile</th>
				<th>Department</th>
				<th>Course</th>
				<th>Email</th>
				<th>SemesterNo</th>
				<th>Year</th>
				<th></th>
				
			</tr>
		</thead>
			<tbody>
						<?php
							include '../controller/MyController.php';
							$obj=new MyController();
							$result=$obj->sel();
							while($row=mysqli_fetch_assoc($result))
							{
						?>
						<tr>
						<form method="post">
							<td scope="row"><input type="text" value="<?php echo $row['Sid'];?>" name="id"> </td>
							<td scope="row"><?php echo $row['RegisterNo'];?></td>
							<td scope="row"><?php echo $row['Name'];?></td>
							<td scope="row"><?php echo $row['Mobile'];?></td>
							<td scope="row"><?php echo $row['Department'];?></td>
							<td scope="row"><?php echo $row['Course'];?></td>
							<td scope="row"><?php echo $row['Email'];?></td>
							<td scope="row"><?php echo $row['SemesterNo'];?></td>
							<td scope="row"><?php echo $row['Year'];?></td>
							<td scope="row"><input type="submit" value="Remove" class="btn-danger" name="Remove"></td>
							
						</form>
						</tr>
						
					</tbody>
					<?php
						if(isset($_POST['Remove']))
							{
								$obj->RemoveStudent($_POST['id']);
							}
							}
							
						?>
		</table>
		</div>
	
	</div>
  </body>
</html>