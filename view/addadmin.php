<!--------  add admin -------->
<!doctype html>
 <html>
  <head>
      <title>admin</title>
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/style.css">
	 
	  
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
                <h3>Add Admin</h3>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="text" id="password" class="form-control" name="password" required>
                    </div>
                </div>
				
				<input type="submit" class="btn btn-primary ml-5" name="addadmin" value="Submit">
                </div>
            </form>
			<?php
				if(isset($_POST['addadmin']))
				{
					include '../controller/MyController.php';
					$obj=new MyController();
					$obj->Addadmin($_POST['username'],$_POST['password']);
				}
			?>
	</div>
	</div>
	<script>
			function validate_form()
			{

				var str=document.forms["myform"]["password"].value;
				
				if(str.length<6){
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