

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="">
        <title>Codevelopers | Support us</title>
        <!--=======================CSS==========================-->
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.css">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">-->
        <!--------------- CUSTOM CSS -------------->
        <link href="styles/css/index.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!------------ NORMALIZE CSS -------------->
        <link href="styles/css/normalize.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            input {
                width: 100%;
            }

            .button {
                width: 70%;
            }

            #footer {
                height: 100%;
            }

            h3 {
                font-weight: 500;
                padding-top: 3%;
            }

            #others {
                padding-left: 20%;
                list-style-type: none;
                text-align: center;
            }

            #social-networks {
                margin-top: 1%;
            }

            h2 {

                margin-top: 2em;
            }

            #res_submit_form {
                margin: 0% 5%;
            }

        </style>
    </head>

    <body>
        <div class="home">
            <nav class="navbar navbar-expand-md bg-light navbar-light">
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
                            <a class="nav-link" href="resources.php">Resources</a>
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
                                    <span class='glyphicon glyphicon-user'></span>
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
            <!---=====================SUPPORT=========- -->
            <div id="main-container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6" style="background-color:rgb(222, 226, 230);padding:0% 5%">
                        <h2>Support Us</h2>
                        <p>We are making a collection of best resources for various technical topics.<br> You can help us by contributing links/references to resources(books,blogs,videos,etc) for any topic you found useful.</p>
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" id="res_submit_form" action="submit_resources.php" class="col-md-6">
                                    <table cellpadding="5">
                                        <tr>
                                            <td><label>Topic</label></td>
                                            <td><input type="text" name="res_topic"></td>
                                        </tr>
                                        <tr>
                                            <td><label>Language</label></td>
                                            <td>
                                                <select name="res_language" style="width:100%">
              <option value="" disabled>Select Option</option>
              <option value="c" >C</option>
              <option value="java">Java</option>
              <option value="html">HTML</option>
              <option value="css">CSS</option>
              <option value="php">PHP</option>
              <option value="javascript">JavaScript</option>
              <option value="python">Python</option>
              <option value="c++">C++</option>
            </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label>Resource Type</label></td>
                                            <td>
                                                <select name="res_type" style="width:100%">
              <option value="" disabled>Select Option</option>
              <option value="website" >Blog / Website</option>
              <option value="video">Video</option>
              <option value="book">Book</option>
              <option value="other">Other</option>
            </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top"><label>Links/References</label></td>
                                            <td><textarea form="res_submit_form" name="res_link" rows="10" cols="32"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><input class="submit" type="submit" name="submit_resources" value="SUBMIT"></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=====END OF MAIN CONTAINER=======---->

            <!-----------FOOTER------------>
            <div id="footer">
            <div class="row">
                <div class="col-md-6" id="other_links">
                    <h3 style="margin-bottom: 5%">Other Links</h3>
                    <div class="row">
                        <div class="col-md-5">
                            <ul id="others">
                                <li class="other_links"><a href="support_us.php" style="text-decoration: none;color: white">Support Us</a></li>
                                <li class="other_links"><a href="#" style="text-decoration: none;color: white">Leaderboard</a></li>
                            </ul>
                        </div>
                        <div class='col-md-6'>
                            <ul id="others">
                                <li class="other_links"><a href="report_bugs.php" style="text-decoration: none;color: white">Report a Bug</a>
                                <li class="other_links"><a href="#" style="text-decoration: none;color: white">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id="find_us" >
<!--                     <h3>Find us at</h3>
                     <iframe width="95%" height="400" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJq8XY4MrG5zsR2KIsZh1I9Ls&key=AIzaSyCS9ABZV-9Z6I4IqbZ0NGnKapD60xjMmiE" allowfullscreen></iframe>  -->
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
            <small><b>&lt;Made by Coders' Club&copy;,FCRIT/&gt;</b></small></i>
        </div>
    </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js " integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4 " crossorigin="anonymous "></script>



        </div>
    </body>

    </html>
