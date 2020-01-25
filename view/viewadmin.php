<!--------  view admins  -------->
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
				<th>Adminid</th>
				<th>Username</th>
				<th>Password</th>
				<th></th>
				
			</tr>
		</thead>
			<tbody>
						<?php
							include '../controller/MyController.php';
							$obj=new MyController();
							$result=$obj->ViewAdmin();
							while($row=mysqli_fetch_assoc($result))
							{
						?>
						<tr>
						<form method="post">
							<td scope="row"><input type="text" value="<?php echo $row['id'];?>" name="id"></td>
							<td scope="row"><?php echo $row['Username'];?></td>
							<td scope="row"><?php echo $row['Password'];?></td>
							<td><input type="submit" value="Remove" class="btn-danger" name="Remove"></td>	
						</form>
						</tr>
						<?php
							}
							if(isset($_POST['Remove']))
							{
								$obj->RemoveAdmin($_POST['id']);
							}
						?>
			</tbody>
			
		</table>
	</div>
	</div>
  </body>
</html>