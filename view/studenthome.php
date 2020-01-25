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
				session_start();
				$var=$_SESSION['id'];
				echo $var;
			?>
		</div>
	
	</div>
  </body>
</html>