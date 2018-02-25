<?php
  session_start();
  
   $err=[];
   error_reporting(0);
      require "db/connect.php";
      require "general.php";
?> 
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!--CDN   -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/chatstyle.css">
</head>
<body style="background-color:  #7a7a52;">

<div class="container" >
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 6%;margin-bottom: 3%;background-color: #000000;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <img src="img/message.png" alt="User Avatar" class="img-circle"/>
                    <span class="glyphicon glyphicon-comment"></span> Chat
                    <a href="index.php"><img src="img/home.png" alt="User Avatar" class="img-circle" style="float: right;" /></a>
                    <span class="glyphicon glyphicon-comment"></span> Chat
                </div>
                <div class="panel-body" style="margin-top: 80px;">
                    <ul class="chat">
                        <div class="chat">       
<?php 
if(isset($_SESSION['email']))
         {
            // chat table 
   if(isset($_POST['submit']))
  {
    
      
      if(ifEmpty($_POST))
      {
          $inputs=senitise($con,$_POST);
          extract ($inputs);
            $qry1 =" select `name` from `users` where `email`= '{$_SESSION['email']}' ";
          $c =mysqli_query($con,$qry1); 
           if($c)
           {
                $res=mysqli_fetch_assoc($c);
                // print_r($res);
                $var=$res['name'];
                // echo "data obtained"."<br>";  
           }
          else
          {
             $err[] = "data not obtained";
           }
        
              
              $qry =" INSERT INTO `chat`(`text`, `email`)
              VALUES ('{$text}','{$var}') ";
          if(mysqli_query($con,$qry))
          {
              // echo "value inserted"."<br>";
          }
          else
               $err[] = "value not inserted";
        
      }   
      else
      {
                       $err[] = "all fields required";
      }
    }
    $qry2="select * from `chat`";
   $d =mysqli_query($con,$qry2);
   if($d)
   {
        // echo "data obtained"."<br>";
   }
   else{
       $err[] = "data not obtained";
   }      
   if(empty($err)){
       $rs=mysqli_fetch_all($d);
      // $rs=mysqli_fetch_assoc($c);
      /* echo "<pre>";
       print_r($rs);
       echo "</pre>";   */   
       if(count($rs)>20){
           $qu = "DELETE FROM `chat`";
           mysqli_query($con, $qu);
       }
           for($i = count($rs)-1 ; $i >= 0 ;$i--)
            {

               print "<li class=\"left clearfix\"><span class=\"chat-img pull-left\">
                            <img src=\"http://placehold.it/50/55C1E7/fff&text=U\" alt=\"User Avatar\" class=\"img-circle\" />
                        </span>
                            <div class=\"chat-body clearfix\">
                                <div class=\"header\">
                                    <strong class=\"primary-font\">".$rs[$i][0]."</strong>
                                </div>
                                <p>".$rs[$i][1]."</p>
                            </div>
                        </li>";

                // print "<h3 style=\"display:inline-block\">".$rs[$i][0].": </h3>";
                // print "<p style=\"display:inline-block; text-align:reght; \">".$rs[$i][1]."</p>";
                // echo "<br>";
            }
        }
         else{
            foreach($err as $val){
                print "<p>Error:".$val."</p>";
            }
        }
         }
         else{
              $err[] = "Login required";
         }
?>
</div>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                         <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                       <!--  <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                   
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li> -->
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <!--  <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small> -->
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <!--  <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small> -->
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                <div class="panel-footer">
                   <form action="chat.php" method="POST" >
                    <div class="input-group" style="margin-top: 70px;
                    margin-bottom: 40px;"">
                        <input id="btn-input" type="text" class="form-control input-sm" 
                     name="text"  required="true" id="text"
                        placeholder="Type your message here..." 
                         style="margin-top: 20px;"/>
                        <span class="input-group-btn" style="margin-top: 24px;">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                <input name="submit" type="submit" value="submit">
                                </button>
                    <a href="chat.php">Refresh</a>
                            <!-- <button class="btn btn-warning btn-sm" id="btn-chat">
                                Send</button> -->
                        </span>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

