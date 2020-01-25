<!--------  add subject  -------->
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
                <h3>Add Subject</h3>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">CourseName</label>
                    <div class="col-sm-8">
                        <input type="text" id="coursename" class="form-control" name="coursename" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">DepartmentName</label>
                    <div class="col-sm-8">
                        <input type="text" id="deptname" class="form-control" name="deptname" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">SubjectName</label>
                    <div class="col-sm-8">
                        <input type="text" id="subname" class="form-control" name="subname" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">SubjectCode</label>
                    <div class="col-sm-8">
                        <input type="text" id="subcode" class="form-control" name="subcode" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Semester</label>
                    <div class="col-sm-8">
                        <input type="text" id="semester" class="form-control" name="semester" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">No.ofCredits</label>
                    <div class="col-sm-8">
						<select name="credits" class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
                    </div>
                </div>
				<input type="submit" class="btn btn-primary ml-5" name="addsubject" value="Submit">
                </div>
            </form>
			<?php
				if(isset($_POST['addsubject']))
				{
					include '../controller/MyController.php';
					$obj=new MyController();
					$obj->AddSubject($_POST['coursename'],$_POST['deptname'],$_POST['subname'],$_POST['subcode'],$_POST['semester'],$_POST['credits']);
				}
			?>
	</div>
	</div>
  </body>
</html>