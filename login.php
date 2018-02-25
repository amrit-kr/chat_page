<?php
 session_start();
if(isset($_SESSION['email'])){
	unset($_SESSION['email']);
}
  if(isset($_POST['submit']))
  {
	  $err=[];
	  require "db/connect.php";
	  require "general.php";
	  if(ifEmpty($_POST)){
		  $inputs=senitise($con,$_POST);
		  extract ($inputs);
		  $qry =" select password from `users` where `email`= '{$email}' ";
		  $c =mysqli_query($con,$qry);
	 $data=mysqli_fetch_assoc($c);
   if(!empty($data))
   {
	   if($data['password']==$password)
	   {
		   $_SESSION['email']=$email;
		  // header("Location:welcome.php");
	   }
	   else
	   {
		   $err[] = "password not matched ";
	   }
   }
      else{
	        $err[] = "email do not exits";
         }
	  }
	  else
	  {
		  $err[] = "All feilds required";
	  }
  }
?>
<html>
<head>

</head>
<body>
<?php
if(isset($err) && !empty($err)){
	print_r($err);
}
if(!isset($_SESSION['email']))
{
  require "login_page.php";	
}
else{
	require "index.php";	
	// echo "<h1>welcome<h1>"."<br>";
}
?>
</body>
</html>
