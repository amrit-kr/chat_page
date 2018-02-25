<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/loginform.css">
</head>
<body>
  <div class="wrapper">
    <form class="form-signin" 
    action="login.php" method="POST" 
    style="margin-top: 13%;">       
      <h2 class="form-signin-heading">Login</h2>
      <input type="email" class="form-control" name="email" placeholder="Email Id" required="true" autofocus="" style="
    margin-top: 35px;"/>
      <input type="password" class="form-control" name="password" placeholder="Password" required="true" style="
    margin-top: 30px;"/>      
     <!--  <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label> -->
      <button class="btn btn-lg btn-primary btn-block" 
      style="
    margin-top: 30px;"><input type="submit" name="submit" value="submit"></button>   
    </form>
  </div>
</body>
</html>
