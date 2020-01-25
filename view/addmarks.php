<!--------  add marks  -------->
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
		<div class="container bg-light col-5">
          <form class="form-horizontal" name="myform" role="form"  method="post">
                <h3>Add Mark</h3>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">RegisterNo</label>
                    <div class="col-sm-8">
                        <input type="text" id="regno" class="form-control" name="regno" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Sid</label>
                    <div class="col-sm-8">
                        <input type="text" id="sid" class="form-control" name="sid" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Course</label>
                    <div class="col-sm-8">
                        <input type="text" id="course" class="form-control" name="course" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="name" class="form-control" name="name" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Subject</label>
                    <div class="col-sm-8">
                        <input type="text" id="subject" class="form-control" name="subject" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Result</label>
                    <div class="col-sm-8">
                        <input type="text" id="result" class="form-control" name="result" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Credits</label>
                    <div class="col-sm-8">
                        <input type="text" id="credits" class="form-control" name="credits" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">TotalGPA</label>
                    <div class="col-sm-8">
                        <input type="text" id="totalgpa" class="form-control" name="totalgpa" required>
                    </div>
                </div>
				<input type="submit" class="btn btn-primary ml-5" name="addmark" value="Submit">
                </div>
            </form>
			<?php
				if(isset($_POST['addmark']))
				{
					include '../controller/MyController.php';
					$obj=new MyController();
					$obj->Addmark($_POST['regno'],$_POST['sid'],$_POST['course'],$_POST['name'],$_POST['subject'],$_POST['result'],$_POST['credits'],$_POST['totalgpa']);
				}
			?>
	</div>
	</div>
  </body>
</html>