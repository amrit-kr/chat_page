<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="css/form.css">
       <script src="js/form.js"></script>
        <style>   
            body{
                background-image: url('images/signup.jpg');
                height: 100%; 
                width: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
       </style>
    </head>
<body>
    
<?php
// include 'html/header.html';
   if(isset($_POST['submit']))
  {
      $err=[];
      require "db/connect.php";
      require "general.php";
      if(ifEmpty($_POST))
      {
          $inputs=senitise($con,$_POST);
          extract ($inputs);
          if(userexits($con, $email)){
              $qry =" INSERT INTO `users`(`name`, `address`, `email`, `phone`,
                        `password`) VALUES ('{$name}','{$address}',
                        '{$email}','{$phone}','{$password}') ";
          if(mysqli_query($con,$qry))
          {
              echo "value inserted"."<br>";
          }
          else
               echo "value not inserted"."<br>";
          }else echo "Email already used";
      }
      else
      {
           echo "all fields required"."<br>";
      }
  }
?>

<div class="container">
<div class="col-md-5" style="margin-left: 10%;margin-top: 12%;">
    <div class="form-area">  
        <form role="form" action="register.php" method="POST">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="true">
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" required="true">
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile Number" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="true">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="true">
                    </div>
                    <!-- <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>                    
                    </div> -->
            
        <button type="button" class="btn btn-primary pull-right">Submit Form
<input name="submit" type="submit" >
        </button>
        </form>
    </div>
</div>
</div>

</body>
</html>