<!--------  student home page  -------->
<!doctype html>
 <html>
  <head>
      <title>admin</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  <style>
  
  </style>
  <script>
			
		</script>
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
              <a class="nav-link " href="studenthome.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="studentprofile.php">
                <i class="fas fa-home"><p>Profile</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="studentresult.php">
                <i class="fas fa-home"><p>Result</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="studentsubject.php">
                <i class="fas fa-home"><p>Subject</p></i>
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewtimetable.php">
                <i class="fas fa-home"><p>Timetable</p></i>
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
			<?php
						include '../controller/MyController.php';
						$obj=new MyController();
						session_start();
						$result=$obj->Getdept($_SESSION['id']);
						while($row=mysqli_fetch_assoc($result))
						{
							$dep=$row['Department'];
							$sem=$row['SemesterNo'];
						}
						
			?>
					<h2><?php echo $dep?>/Semester<?php echo $sem?></h2>
		<table class="table table-striped card-text bg-light">
		<thead>
			<tr>
				
				<th>Day</th>
				<th>Hour 1</th>
				<th>Hour 2</th>
				<th>Hour 3</th>
				<th>Hour 4</th>
				
			</tr>
		</thead>
			<tbody>
								
				<?php
						$res=$obj->StudentTimetable($dep,$sem);
						while($row1=mysqli_fetch_assoc($res))
						{
						?>
						<tr>
						<form>
							<td scope="row"><?php echo $row1['Day'];?></td>
							<td scope="row"><?php echo $row1['Hour1'];?></td>
							<td scope="row"><?php echo $row1['Hour2'];?></td>
							<td scope="row"><?php echo $row1['Hour3'];?></td>
							<td scope="row"><?php echo $row1['Hour4'];?></td>
						</form>
						</tr>
						<?php
							}
						?>
					</tbody>
		</table>
		</div>
	
	</div>
  </body>
</html>