<?php

session_start();
if(!isset($_SESSION['rn']) && !isset($_SESSION['eid']))
{
  $result = 403;
  header("Location: result?res=$result"); 
}
else
{
  // For local hosting
  require('db_conn.php');
  
  if(!$conn)
  {
      $result = 500;
      header("Location: result.php?res=$result"); 
  }
  else
  {
    $roll_no = $_SESSION['rn'];
    $email = $_SESSION['eid'];

    $sql="SELECT  *  FROM  profiles  where  roll_no=$roll_no";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $first_name = $row['first_name'];
    //echo("$first_name");
    $last_name = $row['last_name'];
    $name = $first_name.' '.$last_name;
    $gender = $row['gender'];
    $role = $row['role'];
    $contact = $row['contact'];
    $profession = $row['profession'];
    if($row['dob'] == '0000-00-00')
    {
      $dob = NULL;
    }
    else
    {
      $dob = $row['dob'];
    }
    $hobbies = $row['hobbies'];
    $languages = $row['languages_known'];
    $previous_works = $row['previous_works'];
    $github = $row['github'];
    $linkedin = $row['linkedin'];
  }

 
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>CC : Profile</title>

  <!-- mobile specific metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <!-- CSS
================================================== -->
    <link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.min.css">
    <link href="styles/css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="styles/css/normalize.css" rel="stylesheet" type="text/css">

        <style type="text/css">
        input {
            width: 100%;
            border-color: 1px solid black !important;
        }

        .button {
            width: 100%;
        }

        h2{
            font-weight: 800;
            padding-top : 5px;
        }
        h3 {
            text-align: center;
            padding-top: 5%;
        }

        #logout {
            right: 0;
        }
        textarea {
            resize: none;
        }
        #blue-btn{
            background: none repeat scroll 0 0 #0cbbfc;
            border:1px solid #0cbbfc;
            border-radius:5px;
            color: white;
            font-weight: 400;
            padding: 0.8em 0.9em;
            display: block;
            margin:0.8em 0em;
        }
        #find_us{
            padding-left:40px;
        }
        .other_links{
            padding: 1px;
        }
        #others{
            padding-left: 20%;
        }
        small{
            color:white;
        }
        #form-div{
            background-color: #dee2e6;
            padding: 5%;
        }
        #form_area{
          background-color: #dee2e6;
          padding: 5%;
        }
        #form_area
        select{
          width:100%;
          padding:5px;
        }
        textarea{
          width:100%;
        }
        img{
          justify-content: center;
        }
        #dp{
          justify-content: center;
          padding:10px;
        }
        #attr{
          width:50%;
          text-align: left;
          word-wrap: break-word;
          padding-left: 10px;
          padding-right : 10px;
        }
        #user_info{
          font-size: 15px;
          width:50%;
          text-align: left;
          word-wrap: break-word;
          padding-left: 10px;
          padding-right : 10px;
        }
        #info{
          padding:5px;
        }


    </style>

    <!-- CSS
================================================== -->
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light navbar-light">
      <a class="navbar-brand" href="index.php">Coders' Club</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="box-shadow: 0px 3px 5px">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="project_request.php">Project Request</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blogs.php">Blogs</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="find_resources.php">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_us.php">About Us</a>
          </li>  
        </ul>
        <?php
            if(isset($_SESSION['rn']))
            {
                print("<ul class='navbar-nav'>
                            <li class='nav-item'>
                                <a class='nav-link' href='profile.php'>Profile</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='logout.php'>Logout</a>
                            </li>
                        </ul>");
            }
        ?>
      </div>  
    </nav>
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8" id="form_area">
        <div class="row">
          <div class="col-lg-4">
                <form action="edit_profile.php" name="profile" method="post">
                  <input id="blue-btn" type="submit" name="edit_profile" value="Edit Profile">
                </form>
          </div>
          <div class="col-lg-4" id="dp">
            <center>
            <?php
              if(isset($row['profile_pic']))
              {
                  $profile_pic = $row['profile_pic'];
                  echo '<img class="img-responsive rounded" src="data:image/png;base64,' . base64_encode($profile_pic) . '" height=150px width=150px/><br>';
              }
              else
              {
                  echo "<img class='img-responsive rounded' src='images/default.png' height='150' width='150px'><br>";
              }
            ?>
          </center>
          </div>
          <div class="col-lg-4">
              <form action="change_pwd.php" name="change_pwd_form" method="post">
                <input id="blue-btn" type="submit" name="change_pwd" value="Change Password">
              </form>
          </div>
        </div>
          <div >
            <h4 style="text-align: center">General</h4>
          </div>
        <div class="row" id="info">
          <div id="attr">Roll No</div>
          <div id="user_info"><b><?=$roll_no?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Name</div>
          <div id="user_info"><b><?=$name?></b></div>
        </div>
        <div class="row" id="info" id="info">
          <div id="attr">Gender</div>
          <div id="user_info"><b><?=$gender?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Email ID</div>
          <div id="user_info"><b><?=$email?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Role</div>
          <div id="user_info"><b><?=$role?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Contact No</div>
          <div id="user_info"><b><?=$contact?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Date of Birth</div>
          <div id="user_info"><b><?=$dob?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Profession</div>
          <div id="user_info"><b><?=$profession?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Hobbies</div>
          <div id="user_info"><b><?=$hobbies?></b></div>
        </div>
        <div class="row" id="info">
            <div id="attr">Programming Languages Known</div>
            <div id="user_info"><b><?=$languages?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">Previous Works (Any Projects)</div>
          <div id="user_info"><b><?=$previous_works?></b></div>
        </div>
          <div >
            <h4 style="text-align: center">Other Accounts</h4>
          </div>
        <div class="row" id="info">
          <div id="attr">GitHub Account</div>
          <div id="user_info"><b><?=$github?></b></div>
        </div>
        <div class="row" id="info">
          <div id="attr">LinkedIn</div>
          <div id="user_info"><b><?=$linkedin?></b></div>
        </div>
        <br>
      </div>
      <div class="col-md-2">
      </div>
    </div>
  </div>

  <!--===========FOOTER======================-->
              <div id="footer">
                <div class="col-md-12" id="other_links">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 style="margin-bottom:3%">Other Links</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul id="others">
                                        <li class="other_links"><a href="support_us.php" style="text-decoration: none;color: white">Support Us</a></li>
                                        <li class="other_links"><a href="leaderboard.php" style="text-decoration: none;color: white">Leaderboard</a></li>
                                    </ul>
                                </div>
                                <div class='col-sm-6'>
                                    <ul id="others">
                                        <li class="other_links"><a href="report_bugs.php" style="text-decoration: none;color: white">Report a Bug</a></li>
                                        <li class="other_links"><a href="faqs" style="text-decoration: none;color: white">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-12' id="social-networks">
                    <a href="https://twitter.com/FCRITcodersclub" style="text-decoration: none">
                        <div id="twitter" class="social-sprites"></div>
                    </a>
                    <a href="#" style="text-decoration: none">
                        <div id="facebook" class="social-sprites"></div>
                    </a>
                    <a href="https://plus.google.com/u/2/110531617173128497831" style="text-decoration: none">
                        <div id="google" class="social-sprites"></div>
                    </a>
                    <a href="#" style="text-decoration: none">
                        <div id="linkedin" class="social-sprites"></div>
                    </a>
                </div>
                <div class="col-md-12" id="make">
                    <small>&lt;Made by Coders' Club&copy;,FCRIT/&gt;</small></i>
                </div>
            </div>
    <!--===========END OF FOOTER======================-->


        <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
        <script src="styles/bootstrap/js/bootstrap.min.js"></script>



</body>
</html>