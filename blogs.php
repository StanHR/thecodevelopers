<?php

session_start();
// For local hosting
require('db_conn.php');

if(!$conn)
{
	$result = 500;
	header("Location: result.php?err=$result"); 
}
else
{
	$sql = "Select * from blogs";
	$result = mysqli_query($conn,$sql);
	if(!$result)
	{
		$result = 500;
		header("Location: result.php?err=$result"); 
	}
	else
	{
		if(mysqli_num_rows($result)==0)
		{
			echo("No Blogs Have been Added Yet.");
		}
	}
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>CC : Profile</title>

<!--  mobile specific metas-->
<!-- ================================================== -->
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
        #blogs_area{
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
        #blog_data{
          font-size: 15px;
          text-align: left;
          word-wrap: break-word;
          padding-left: 25px;
          padding-right : 25px;
          padding-bottom: 5px
        }
        #info{
          padding:5px;
        }
        .blog_cards{
        	margin:10px;
        	padding:10px;
        	/*background-color:#cbd0d6;*/
        	color:black;
        	border : 1px solid black;
        	border-radius: 5px
        }


    </style>

    <!-- CSS
================================================== -->
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light navbar-light">
      <a class="navbar-brand" href="index">Coders' Club</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="box-shadow: 0px 3px 5px">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="project_request">Project Request</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blogs">Blogs</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="find_resources">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_us">About Us</a>
          </li>  
        </ul>
        <?php
            if(isset($_SESSION['rn']))
            {
                print("<ul class='navbar-nav'>
                            <li class='nav-item'>
                                <a class='nav-link' href='profile'>Profile</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='logout'>Logout</a>
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
	    <div class="col-md-8" id="blogs_area">

      		<?php
      			if(mysqli_num_rows($result)>0)
      			{
      				while($data = mysqli_fetch_array($result))
					{	
						$title = $data['blog_title'];
            $category = $data['blog_category'];
						$roll_no = $data['roll_no'];
						$author = $data['blog_author'];
						$date = $data['blog_timestamp'];
						$content = $data['blog_content'];
						echo("<div class='blog_cards'> <div class='row'>");
						echo("<div id='blog_data' class='col-md-3'><b>Title</b></div>");
						echo("<div id='blog_data' class='col-md-9'><b>$title</b></div>");
						echo('</div>');

            echo("<div class='row'>");
            echo("<div id='blog_data' class='col-md-3'><b>Category</b></div>");
            echo("<div id='blog_data' class='col-md-9'>$category</div>");
            echo('</div>');

						echo("<div class='row'>");
						echo("<div id='blog_data' class='col-md-3'><b>Author</b></div>");
						echo("<div id='blog_data' class='col-md-9'>$author ($roll_no)</div>");
						echo('</div>');

						echo("<div class='row'>");
						echo("<div id='blog_data' class='col-md-3'><b>Date</b></div>");
						echo("<div id='blog_data' class='col-md-9'>$date</div>");
						echo('</div>');

						echo("<div class='row'>");
						echo("<div id='blog_data' class='col-md-3'><b>Content</b></div>");
						echo("<div id='blog_data' class='col-md-9'>$content</div>");
						echo('</div></div>');
					}
      		
      			}


      			if(isset($_SESSION['rn']))
      		{
      			echo("<div class='row'>
      					<div class='col-md-4'>
      					</div>
      					<div class='col-md-4'>
      					<form action='add_blogs' name='add_blogs_redirect' method='post'>
                			<input id='blue-btn' type='submit' name='add_blogs' value='Add New Blog'>
              			</form>
              			</div>
              			<div class='col-md-4'>
              			</div>
              		</div>");
      		}
      		?>




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
                                        <li class="other_links"><a href="support_us" style="text-decoration: none;color: white">Support Us</a></li>
                                        <li class="other_links"><a href="leaderboard" style="text-decoration: none;color: white">Leaderboard</a></li>
                                    </ul>
                                </div>
                                <div class='col-sm-6'>
                                    <ul id="others">
                                        <li class="other_links"><a href="report_bugs" style="text-decoration: none;color: white">Report a Bug</a></li>
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