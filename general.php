<?php
  function ifEmpty($arr){
	  foreach($arr as $val)
	  {
		  if($val == "" || $val == null)
			  return false;
		  else
		  return true;
	  }
  }
  function senitise($con, $arr)
  {
	  $arra=[];
	  foreach($arr as $key => $str)
	  {
		$str=mysqli_real_escape_string($con,$str);
		$arra[$key] = htmlentities($str);  
	  }
	  
	  return $arra;
  }
  function userexits($con,$email)
  {
	  $qry = "select * from `users` where `email` = '{$email}' ";
	    $c = mysqli_query($con,$qry);
		$data=mysqli_fetch_assoc($c);
		if(empty($data))
		{
		     return true;	
		}
		else
		{
			return false;
		}
  }
?>