<!--------  add timetable  -------->
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
			 </li>
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
                <h3>Add Timetable</h3>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Day</label>
                    <div class="col-sm-8">
                        <select name="day" id="day" class="form-control">
							<option value="Monday">Monday</option>
							<option value="Tuesday">Tuesday</option>
							<option value="Wednesday">Wednesday</option>
							<option value="Thursday">Thursday</option>
							<option value="Friday">Friday</option>
						</select>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-8">
                        <input type="text" id="department" class="form-control" name="department" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Hour1</label>
                    <div class="col-sm-8">
                        <input type="text" id="h1" class="form-control" name= "h1" required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Hour2</label>
                    <div class="col-sm-8">
                        <input type="text" id="h2" class="form-control" name= "h2" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Hour3</label>
                    <div class="col-sm-8">
                        <input type="text" id="h3" class="form-control" name= "h3" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Hour4</label>
                    <div class="col-sm-8">
                        <input type="text" id="h4" class="form-control" name= "h4" required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Adminid</label>
                    <div class="col-sm-8">
                        <input type="text" id="adminid" class="form-control" name="adminid" required>
                    </div>
                </div>
                
                
                 <div class="form-group">
                        <label class="col-sm-3 control-label">SemesterNo</label>
                    <div class="col-sm-8">
						<select name="semesterno" id="semesterno" class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
						</select>
                    </div>
                </div>
				<input type="submit" class="btn btn-primary ml-5" name="addtmtbl" value="Add+">
				</form>
            </div>
			<?php
				if(isset($_POST['addtmtbl']))
				{
					include '../controller/MyController.php';
					$obj=new MyController();
					$obj->AddTimetable($_POST['day'],$_POST['department'],$_POST['h1'],$_POST['h2'],$_POST['h3'],$_POST['h4'],$_POST['adminid'],$_POST['semesterno']);
				}
			?>
		</div>
	
	</div>
  </body>
</html>