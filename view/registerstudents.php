<!--------  students registration -------->
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
          <form class="form-horizontal" name="myform" role="form" onsubmit="return validate_form()"  method="post">
                <h3>Student Registration</h3>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">RegisterNo</label>
                    <div class="col-sm-8">
                        <input type="text" id="regno" class="form-control" name="regno" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="name" class="form-control" name="name" required>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="mobile" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Department</label>
                    <div class="col-sm-8">
                        <input type="text" id="department" class="form-control" name= "department" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Course</label>
                    <div class="col-sm-8">
                        <input type="text" id="course" class="form-control" name="course" required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">E-mail</label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name="email" required>
                    </div>
                </div>
                
                
                 <div class="form-group">
                        <label class="col-sm-3 control-label">SemesterNo </label>
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
				<div class="form-group">
                        <label class="col-sm-3 control-label">Year</label>
                    <div class="col-sm-8">
                        <input type="text" id="year" class="form-control" name="year">
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" required>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>
                </div>
				<input type="submit" class="btn btn-primary ml-5" name="studregister" value="Register">
                </div>
            </form>
			<?php
				if(isset($_POST['studregister']))
				{
					include '../controller/MyController.php';
					$obj=new MyController();
					$obj->Studreg();
				}
			?>
	</div>
	</div>
	<script>
			function validate_form()
			{
				var mb=document.forms["myform"]["mobile"].value;
				var str=document.forms["myform"]["password"].value;
				
				if(mb.length!=10){
					alert("Invalid mobileno");
					return false;
					
				}
				else if(str.length<6){
					alert("Password too short.");
					return false;
				}
				
				else{
					return true;
				}
				
			}
		</script>
  </body>
</html>