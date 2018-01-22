<?php

session_start();

if(isset($_SESSION['rn']) && isset($_SESSION['eid']))
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
		$name = $_SESSION['uname'];
		$email = $_SESSION['eid'];
		$sql = "select contact, profession from profiles where roll_no = '$roll_no'";
		//echo($sql);
		$result = mysqli_query($conn,$sql);

		if(!$result)
		{
			$result = 500;
    		header("Location: result.php?res=$result"); 
		}
		else
		{
			$row = mysqli_fetch_array($result);
			$contact = $row['contact'];
			$profession = $row['profession'];
			//print_r($row);
		}
		
	}
}
else
{
	$name = "";
	$email = "";
	$contact = "";
	$profession = "";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>CC : Project Request</title>

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
        select{
        	width:100%;
        	padding:5px;
        }
        textarea{
        	width:100%;
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
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8" id="form_area">
				<div class="page_heading">
					<h2>
						<b>Project Request</b>
					</h2> 
				</div>
				<div id="message_for_clients">
					<p>
						Do you have an idea you wish to implement ? Or want us to develop a solution for you business ? We're here to help you out !
					</p>
					<p>
						Provide your details in the form below and we will get back to you as soon as possible.<br>
					</p>
				</div>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
        				<form id="project_request_form" method="POST" action="pr_submit.php">
        					<label>Name :</label>
        					<input class="form-control" type="text" name="name" required="true" placeholder="Enter Your Name" value="<?=$name?>">
        					<label>Email </label>
        					<input class="form-control" type="email" name="email" placeholder="Enter Your Email" value="<?=$email?>">
        					<label>Contact </label>
        					<input class="form-control" type="text" name="contact" required="true" placeholder="Enter Your Contact" value="<?=$contact?>">
        					<label>Profession </label>
        					<input class="form-control" type="text" name="profession" required="true" placeholder="Enter Your Profession" value="<?=$profession?>">
        					<label>Organization / Company / Institute </label>
        					<input class="form-control" type="text" name="organization" required="true" placeholder="Enter Your Organization Name">
        					<label>Project Type </label>
        					<select required="true" name="project_type">
        		              <option value="" disabled selected="selected">Select Project Type</option>
        		              <option value="software">Software</option>
        		              <option value="hardware">Hardware</option>
        		              <option value="iot">IOT (Internet of Things)</option>
        		              <option value="other">Other</option>
        	            	</select>
        					<label>Project Description</label>
        					<textarea class="form-control" id="proj_descr" rows="5" cols="32" form='project_request_form' name="proj_descr" required="true" maxlength="500"></textarea>
        					<br>
        					<input name="pr_submit" type="submit" name="submit" value="Submit Request">
        				</form>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
			</div>
			<div class="col-sm-2">
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
                                        <li class="other_links"><a href="#" style="text-decoration: none;color: white">Support Us</a></li>
                                        <li class="other_links"><a href="#" style="text-decoration: none;color: white">Leaderboard</a></li>
                                    </ul>
                                </div>
                                <div class='col-sm-6'>
                                    <ul id="others">
                                        <li class="other_links"><a href="report_bugs.php" style="text-decoration: none;color: white">Report a Bug</a></li>
                                        <li class="other_links"><a href="#" style="text-decoration: none;color: white">FAQs</a></li>
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