<?php
	include '../config/connection.php';
	class MyController
	{
		#---- student registration----------
		function Studreg()
		{
			$regno=$_POST['regno'];
			$name=$_POST['name'];
			$mobile=$_POST['mobile'];
			$department=$_POST['department'];
			$course=$_POST['course'];
			$email=$_POST['email'];
			$semesterno=$_POST['semesterno'];
			$year=$_POST['year'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			include '../model/MyModel.php';
			$mod= new MyModel();
			$mod->insertstudent($regno,$name,$mobile,$department,$course,$email,$semesterno,$year,$username,$password);
		}
		#---------- login -----------------------
		function LoginAct()
		{
			$uname=$_POST['username'];
			$pwd=$_POST['password'];
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->logincheck($uname,$pwd);
		}
		#-------- load first page------------
		function LoadFirst()
		{
			header('location:view/login.php');
		}
		#------- change password -----------
		function passwordchange($user,$email,$pwd)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->changepwd($user,$email,$pwd);
			
		}
		#--------- add course ----------------
		function Addcourse($coursename,$deptname)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->addcourse($coursename,$deptname);
		}
		#--------- select students ------------
		function sel()
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->selectusers();
			return $result;
		}
		#----------- add mark ---------------------
		function Addmark($regno,$sid,$course,$name,$subject,$result,$credits,$totalgpa)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->addmark();
		}
		#-------- display student profile -----------
		function Studentprofile($id)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->studentprofile($id);
			return $result;
		}
		#---------- add admin ---------------
		function Addadmin($user,$pwd)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->addadmin($user,$pwd);
		}
		#---------- add subject ------------
		function AddSubject($course,$dept,$subname,$subcode,$sem,$credits)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->addsubject($course,$dept,$subname,$subcode,$sem,$credits);
		}
		#------------ student result -------------
		function Studentresult($id)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->studentresult($id);
			return $result;
		}
		#---------- get department -----------
		function Getdept($id)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->getdepartment($id);
			return $result;
		}
		#---------- student subjects ----------------
		function Studentsubject($dept)
		{
			#include '../model/MyModel.php';
			$m=new MyModel();
			$r=$m->StudSub($dept);
			return $r;
		}
		#------- view admins --------------
		function ViewAdmin()
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$result=$mod->viewadmin();
			return $result;
		}
		#---------- remove admin ---------------
		function RemoveAdmin($id)
		{
			#include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->removeadmin($id);
		}
		#-------- remove students ---------------
		function RemoveStudent($id)
		{
			#include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->removestudent($id);
		}
		# ----------- add timetable --------------
		function AddTimetable($day,$dept,$h1,$h2,$h3,$h4,$adminid,$sem)
		{
			include '../model/MyModel.php';
			$mod=new MyModel();
			$mod->addtimetable($day,$dept,$h1,$h2,$h3,$h4,$adminid,$sem);
		}
		#---------- student timetable ----------------
		function StudentTimetable($dept,$sem)
		{
			#include '../model/MyModel.php';
			$m=new MyModel();
			$r=$m->studenttimetable($dept,$sem);
			return $r;
		}
	}
?>