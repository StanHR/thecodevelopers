<?php

session_start();

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
        #about_us{
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
        #sem{
            text-align: center;
        }
        #overlay1,#overlay2,#overlay3,#overlay4,#overlay5,#overlay6,#overlay7,#overlay8,#overlay9{
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.95);
            z-index: 2;
            cursor: pointer;
        }

        #text1,#text2,#text3,#text4,#text5,#text6,#text7,#text8,#text9{
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: 15px;
            color: white;
            transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
        }
        img{
            width: 100%;
            padding:10px;
        }
/*        img{
            width:80%;
        }*/
        .cards{
            text-align: center;
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
            <div class="col-md-8" id="about_us">
                <span><img src="images/agnel.jpg" alt="agnel" id='agenl'></span>
                 <div>
                    <h2>What is Coders' Club?</h2>
                    <p>Here at coders club we believe coding to be one of the basic necessities in today’s digital world. It is our vision to learn and help others learn the art of coding, to create a virtual world of our own from scratch. We look forward to creating projects that people or companies have in their mind, transforming dreams into reality.This is what we are all about.</p>
                </div>
                <div class='row'>
                    <div class='col-sm-4' id="harshit">
                        <div class='cards'>
                            <div onclick="on(1)">
                                <img src="images/stud_male.png" alt="harshit">
                                <h3>Harshit Rai</h3>
                                <p id='sem'>IT III<sup>rd</sup> Year</p>
                            </div>
                            <div id='overlay1' onclick="off(1)">
                                <p id='text1'><b>Harshit is the leading force behind the development of this website. An exemplary Coder and a motivator, he has achieved many awards including the first prize for last year CSI-IT where his team won the first prize for creating the ‘Agnel Online’ website along with Nathan. He has proficiency in all basic programming languages especially python and is a Certified Ethical Hacker.</b></p>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-4' id="pushkar">
                        <div class='cards'>
                            <div onclick="on(2)">
                                <img src="images/stud_male.png" alt="pushkar" >
                                <h3>Pushkar Pokharkar</h3>
                                <p id='sem'>IT III<sup>rd</sup> Year</p>
                            </div>
                            <div id='overlay2' onclick="off(2)">
                                <p id='text2'><b>Pushkar has a deep interest in data science, cryptic techniques and web designing. He loves to read, Drive and play cricket. He has achieved a diploma in android application development and certifications for PHP and asp mvc.</b></p>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-4' id="nathan">
                        <div class='cards'>
                            <div onclick="on(3)">
                                <img src="images/stud_male.png" alt="nathan" >
                                <h3>Nathan Nunes</h3>
                                <p id='sem'>IT III<sup>rd</sup> Year</p>
                            </div>
                            <div id='overlay3' onclick="off(3)">
                                <p id='text3'><b>Nathan loves to play basketball, football and to try different coding methods. His achievements include getting placed first in cyber Olympiad, top 20 in college level coding competition and placed first for creating agnel online website alongside with Harshit and a fellow student.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-4' id="felix">
                        <div class='cards'>
                            <div onclick="on(4)">
                                <img src="images/stud_male.png" alt="felix" >
                                <h3>Felix Sekar</h3>
                                <p id='sem'>IT III<sup>rd</sup> Year</p>
                            </div>
                            <div id='overlay4' onclick="off(4)">
                                <p id='text4'><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b></p>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-4' id="ranjay">
                        <div class='cards'>
                            <div onclick="on(5)">
                                <img src="images/stud_male.png" alt="ranjay" >
                                <h3>Ranjay Bose</h3>
                                <p id='sem'>IT II<sup>nd</sup> Year</p>
                            </div>
                            <div id='overlay5' onclick="off(5)">
                                <p id='text5'><b>Ranjay has a keen interest in solving every day problems using technology and is an avid propagator of science.His other interests include analysing government policies and watching indie movies.</b></p>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-4' id="pooja">
                        <div class='cards'>
                            <div onclick="on(6)">
                                <img src="images/stud_female.png" alt="pooja" >
                                <h3>Pooja More</h3>
                                <p id='sem'>IT II<sup>nd</sup> Year</p>
                            </div>
                            <div id='overlay6' onclick="off(6)">
                                <p id='text6'><b>Pooja is interested in game development, web designing, photography and gaming. Her achievements include being the sports GS at diploma level, gold and silver medallist national and international karate tournament and has won various coding and technical poster presentation competition at Inter College Level.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-4' id="joslyn">
                        <div class='cards'>
                            <div onclick="on(7)">
                                <img src="images/stud_male.png" alt="joslyn" >
                                <h3>Joslyn</h3>
                                <p id='sem'>IT II<sup>nd</sup> Year</p>
                            </div>
                            <div id='overlay7' onclick="off(7)">
                                <p id='text7'><b>Joslyn loves football, rap music and reading. Needless to say he loves coding as well, and has knowledge on Cross-platform mobile application development along with other basic languages And especially loves PHP. He won the first prize for last years CSI IT decryption competition.</b></p>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-4' id="purvesh">
                        <div class='cards'>
                            <div onclick="on(8)">
                                <img src="images/stud_male.png" alt="purvesh" >
                                <h3>Purvesh Jain</h3>
                                <p id='sem'>IT II<sup>nd</sup> Year</p>
                            </div>
                            <div id='overlay8' onclick="off(8)">
                                <p id='text8'><b>Purvesh loves watching TV series as much as he does to code, his favourite being PHP coding and has proficiency in basic coding languages and also loves playing volleyball and doing research on Technology and politics in free time.</b></p>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-4' id="abey">
                        <div class='cards'>
                            <div onclick="on(9)">
                                <img src="images/stud_male.png" alt="abey" >
                                <h3>Abey</h3>
                                <p id='sem'>IT II<sup>nd</sup> Year</p>
                            </div>
                            <div id='overlay9' onclick="off(9)">
                                <p id='text9'><b>Abey's interest lies in website development, machine learning and artificial intelligence. He is an ace Athlete who loves listening to music and watching war movies. Is also a diehard fan of Marvel universe. ‘Hail Hydra’.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
            <script>
            function on(x) {
                var elementId = 'overlay'+x;
                document.getElementById(elementId).style.display = "block";
                // alert("On "+elementId);
            }

            function off(x) {
                var elementId = 'overlay'+x;
                document.getElementById(elementId).style.display = "none";
                // alert("Off "+elementId);
            }
            </script>

        </div>
    </div>

<!--             <div style="margin:5em">
                <span><img></span>
                <div>
                    <h2>What is Coders' Club?</h2>
                    <p>Here at coders club we believe coding to be one of the basic necessities in today’s digital world. It is our vision to learn and help others learn the art of coding, to create a virtual world of our own from scratch. We look forward to creating projects that people or companies have in their mind, transforming dreams into reality. This is what we are all about.</p>
                </div>
                <div id="dev">
                    <h3 style="text-align: left">Coders' Club Developers</h3>
                    <div id="meet-team">
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="card">
                                    <img src="images/stud_male.png" alt="Harshit" >
                                    <div class="container">
                                        <h2>Harshit Rai</h2>
                                        <p class="title">IT III<sup>rd</sup> year</p>
                                        <p>Harshit is the leading force behind the development of this website. An exemplary Coder and a motivator, he has achieved many awards including the first prize for last year CSI-IT where his team won the first prize for creating the ‘Agnel Online’ website along with Nathan. He has proficiency in all basic programming languages especially python and is a Certified Ethical Hacker.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-lg-4">
                                <div class="card">
                                    <img src="images/stud_male.png" alt="Pushkar" >
                                    <div class="container">
                                        <h2>Pushkar Pokharkar</h2>
                                        <p class="title">IT III<sup>rd</sup> year</p>
                                        <p>Pushkar has a deep interest in data science, cryptic techniques and web designing. He loves to read, Drive and play cricket. He has achieved a diploma in android application development and certifications for PHP and asp mvc.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-lg-4">
                                <div class="card">
                                    <img src="images/stud_male.png" alt="Felix" >
                                    <div class="container">
                                        <h2>Felix Sekar</h2>
                                        <p class="title">IT III<sup>rd</sup> year</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate sed beatae magni odio error omnis, animi cum, delectus eius excepturi natus dolores culpa. Blanditiis, ab accusamus. Dolore nam sapiente, modi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-4">
                                <div class="card">
                                    <img src="images/stud_male.png" alt="Nathan" >
                                    <div class="container">
                                        <h2>Nathan Nunes</h2>
                                        <p class="title">IT III
                                            <sup>rd</sup> year</p>
                                        <p>Nathan loves to play basketball, football and to try different coding methods. His achievements include getting placed first in cyber Olympiad, top 20 in college level coding competition and placed first for creating agnel online website alongside with Harshit and a fellow student.

                                        </p>
                                    </div>
                                </div>
                            </div>
<!--                             </div>

                        <div class="row"> -->

<!--                             <div class="col-sm-4 col-lg-4">
                                <div class="card">
                                    <img src="images/stud_male.png" alt="Ranjay" >
                                    <div class="container">
                                        <h2>Ranjay Bose</h2>
                                        <p class="title">IT II
                                            <sup>nd</sup> year</p>
                                        <p>Ranjay has a keen interest in solving every day problems using technology and is an avid propagator of science.His other interests include analysing government policies and watching indie movies.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-lg-4">
                                <div class="card">
                                    <img src="images/stud_female.png" alt="Pooja" >
                                    <div class="container">
                                        <h2>Pooja More</h2>
                                        <p class="title">IT II
                                            <sup>nd</sup> year</p>
                                        <p>Pooja is interested in game development, web designing, photography and gaming. Her achievements include being the sports GS at diploma level, gold and silver medallist national and international karate tournament and has won various coding and technical poster presentation competition at Inter College Level.</p>
                                    </div>
                                </div>
                            </div>
<!--                             </div>

                        <div class="row"> -->
<!--                             <div class="col-sm-4 col-lg-4">
                                <div class="card">
                                    <img src="images/stud_male.png" alt="Joslyn" >
                                    <div class="container">
                                        <h2>Joslyn</h2>
                                        <p class="title">IT II
                                            <sup>nd</sup> year</p>
                                        <p>Joslyn loves football, rap music and reading. Needless to say he loves coding as well, and has knowledge on Cross-platform mobile application development along with other basic languages And especially loves PHP. He won the first prize for last years CSI IT decryption competition.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-lg-4">
                                <div class="card">
                                    <img src="images/stud_male.png" alt="Purvesh" >
                                    <div class="container">
                                        <h2>Purvesh</h2>
                                        <p class="title">IT II
                                            <sup>nd</sup> year</p>
                                        <p>Purvesh loves watching TV series as much as he does to code, his favourite being PHP coding and has proficiency in basic coding languages and also loves playing volleyball and doing research on Technology and politics in free time.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-lg-4">
                                <div class="card">
                                    <img src="images/stud_male.png" alt="Abey" >
                                    <div class="container">
                                        <h2>Abey</h2>
                                        <p class="title">IT II
                                            <sup>nd</sup> year</p>
                                        <p>Abey's interest lies in website development, machine learning and artificial intelligence. He is an ace Athlete who loves listening to music and watching war movies. Is also a diehard fan of Marvel universe. ‘Hail Hydra’.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
 -->

            <!----------OUR PROJECTS------->

            <!--------END OF OUR PROJECTS--->

            <!-----------FOOTER------------>
<!--             <div id="footer">
                <div class="row">
                    <div class="col-md-12" id="other_links">
                        <h3 style="margin-bottom:3% ; text-align: center">Other links</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul id="others">
                                    <li><a href="#" style="text-decoration: none;color: white">Donate</a></li>
                                    <li><a href="#" style="text-decoration: none;color: white">Leaderboard</a></li>
                                </ul>
                            </div>
                            <div class='col-md-6'>
                                <ul id="others">
                                    <li><a href="#" style="text-decoration: none;color: white">Report a Bug</a>
                                        <li><a href="#" style="text-decoration: none;color: white">FAQs</a></li>
                                </ul>
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
            </div> -->
            <!-- /.container
    <!- -===========FOOTER======================-->
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
                                        <li class="other_links"><a href="report_bugs" style="text-decoration: none;color: white">Report a Bug</a></li>
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
            <!-- Placed at the end of the document so the pages load faster -->
            <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js " integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4 " crossorigin="anonymous "></script>


        </div>
    </body>

</html>