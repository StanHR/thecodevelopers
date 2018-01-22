<?php
    session_start();
    require('db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Home</title>
        <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.css">

    <!--CUSTOM CSS -->
    <link href="styles/css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- NORMALIZE CSS -->
    <link href="styles/css/normalize.css" rel="stylesheet" type="text/css">
    <style type="text/css">
/*        .signin_submit{
            clear:both;            
        }*/

        .post_login{
            padding-right: 10%;
            padding-left: 10%;
            position: relative;
        }

        .ideas{
            position: relative;
            color:#b3b3b3;
            background: url(images/idea.jpg) 30% 20% no-repeat;
            height:100%;
            margin : 10px 0px;
        }
        #gotideas{
        	margin-top: 25px;
        	justify-content: center;
            font-weight: 800;
            font-family:courier new,cursive;
            font-size: 25px;
        }
        #widgets{
            width: 100%;
            padding:0px;
            margin:0px;
        }
        }
        #footer{
            height:100%;
        }
        h3{
            text-align: center;
            padding-top:5%;
        }
        #others{
            padding-left: 20%;
        }
        #social-networks{
            margin-top: 1%;
        }
        #logout{
            right:0;
        }
      	.other_links{
            padding-bottom: 3px;
        }
        #announce_title{
            text-align: center;
            padding-bottom: 10px
        }
        #announcement_links{
            color:#212737;
            word-wrap: break-word;
            font-size: 15px;
        }
        #announcement_links:hover,
        #signup_link:hover{
            color:#0cbbfc;
            cursor: pointer;
        }
        #announcement_panel{
            width:100%;
            height:400px;
            line-height:1em;
            padding:5px;
            overflow-y:auto;
            background-color:rgb(241, 241, 241);
            color:#212737;
            overflow-x: hidden;
            word-break: break-word;
        }
        #signup_link{
            text-decoration:none;
            color:white;
        }
        #announce_row{
            margin-bottom: 1em;
        }
        .modal-body{
            font-size: 14px;
            width:100%;
            line-height: 1.5em;
        }
        label{
        	text-align: left;
        }
        input{
        	width: 100%;
        }
        #login_form{			
			color: #b3b3b3;
			padding:20px;
        }
        p{
        	text-align: center;
        	font-weight: 800;
            font-family:courier new,cursive;
        }
    </style>
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
              	<li class="nav-item">
                	<a class="nav-link" href="report_bugs.php">Report Bugs</a>
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
	<div class='container-fluid'>
		<!-- LIDERS HERE -->
        <div class='row slider'>
            <img class="mySlides" src="images/slider1.jpg" style="width: 100%;height:75% !important;position: relative;list-style-type: none">
            <div class="overlay">
            </div>
            <img class="mySlides" src="images/slider2.jpg" style="width: 100%;height: 75% !important;position: relative;list-style-type: none">
            <div class="overlay">
            </div>
            <img class="mySlides" src="images/slider3.jpg" style="width: 100%;height: 75% !important;position: relative;list-style-type: none">
            <div class="overlay">
            </div>
        </div>


        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 3500);
            }
        </script>

        <div class='signin_submit'>
        	<div class="row" style='background: #212737;'>
        		<div class='col-md-6' id='login_form'>
        			<?php
        				if(!isset($_SESSION['rn']))
        				{
        					echo("

        						<div class='row login'>
        							<div class='col-md-1'>
        							</div>
        							<div class='col-md-9'>
        								<form id='loginForm' method='POST' action='login_validation'>
	        								<h2>Login</h2>
	        								<label for='email'>Email-ID</label>
			                                <input class='input' type='text' name='email' size='35' required='true'>
	    		                            <label for='password' style='padding-top:5px'>Password</label>
	            		                    <input class='input' type='password' name='password' size='35' required='true'>
	            		                    <input type='submit' name='login_validation' value='Login' style='background: none repeat scroll 0 0 #0cbbfc;border:1px solid #0cbbfc;border-radius:5px;color: white;font-weight: 400;padding: 0.8em 0.9em;display: block;margin:0.8em 0em;'>
	            		                    <a href='signup' id='signup_link'>Don't have an account yet ? Sign up now !</a>
	            		                </form>
        							</div>
        							<div class='col-md-1'>
        							</div>
        						</div>
        						");
        				}
        				else
        				{
	                        $name = $_SESSION['uname'];
	                        echo("<div class='post_login'>
	                            <h1 style='margin-left:10px'>Welcome, <br> <b>$name</b></h1>
	                            <h3>Something Interesting coming for you in this section...</h3>
	                        </div>");
        				}
        			?>
        		</div>
        		<div class="col-md-6 ideas" style="height:100%">
        			<div class="row">
        				<div class='col-md-3'>
        				</div>
		    		    <div class='col-md-6'>
		    		    	<p id="gotideas">Got any cool ideas ?</p>
		                    <a href="project_request">
		                    	<button class="button" id='fancy_submit' style="margin-top:10%">
		                    		<span>Submit Idea</span>
		                    	</button>
		                    </a>
		                    <p style="padding-bottom: 5%; padding-top: 5%; font-size: 20px">Submit your ideas or project requirements and we'll get back to you !</p>
		                </div>
		                <div class="col-md-3">
		                </div> 
                	</div>
        		</div>
        	</div>
        </div>
        	<div class="row">
                <div class="col-md-6">
                    <div id='announcement_panel'>
                            <h2 id='announce_title'><b>Announcement Section</b></h2>
                        <?php 
                            $query= " SELECT * FROM announcements ORDER BY id DESC";
                            $result= mysqli_query($conn,$query);
                            while( $announce = mysqli_fetch_array($result)){
                                $date = $announce['date'];
                                $title = $announce['title'];
                                $content = $announce['content'];
                                echo("

                                    <a id='announcement_links' data-toggle='modal' data-target='#$title'>
                                        <div class='row' id='announce_row'>
                                            <div class='col-5' style='text-align:left'>
                                                &emsp; $date 
                                            </div>
                                            <div class='col-7'> <b>
                                                $title </b>
                                            </div> 
                                        </div>
                                    </a>

                                    <div class='modal fade' id='$title' tabindex='-1' role='dialog' aria-labelledby='announcementsModal' aria-hidden='true'>
                                        <div class='modal-dialog' role='document'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='announcementTitle'>
                                                        $title
                                                    </h5>
                                                </div>
                                                <div class='modal-body'>
                                                    $content
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                "); 
                            }
                        ?> 


                    </div>   
                </div>
                <div class="col-md-6" style="margin-left:-5px">
                        <a class="twitter-timeline" data-lang="en" data-width="100%" data-height="400" href="https://twitter.com/FCRITcodersclub" data-chrome="nofooter noborders transparent scrollbar"></a> 
                         <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>

	</div>
	
	<!-- FOOTER -->
    <div id="footer">
        <div id="other_links">
            <div class="row">
                <div class="col-md-6">
                    <h3 style="margin-bottom:3%">Other Links</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul id="others">
                                <li class="other_links"><a href="support_us" style="text-decoration: none;color: white">Support Us</a></li>
                                <li class="other_links"><a href="#" style="text-decoration: none;color: white">Leaderboard</a></li>
                            </ul>
                        </div>
                        <div class='col-md-6'>
                            <ul id="others">
                                <li class="other_links"><a href="report_bugs" style="text-decoration: none;color: white">Report a Bug</a></li>
                                <li class="other_links"><a href="#" style="text-decoration: none;color: white">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='col-md-6'>
               		<div class='row'>
                		<div class='col-md-1'>
                		</div>
                		<div class="col-md-10">
		                	<h3>Find us at</h3>
		            		<iframe width="100%" height="400" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJq8XY4MrG5zsR2KIsZh1I9Ls&key=AIzaSyCS9ABZV-9Z6I4IqbZ0NGnKapD60xjMmiE" allowfullscreen></iframe>
                		</div> 
                		<div class='col-md-1'>
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
    <!-- FOOTER ENDS -->



   	<script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script type="text/javascript" src="styles/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>