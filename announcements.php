
<?php

$conn= mysqli_connect('localhost','root','','ccw');
if(!$conn){
    die("error");
}
else{
echo " ";};

$query= " SELECT * FROM announcements ";
$result= mysqli_query($conn,$query);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    
<div style="width:100%;height:300px;line-height:3em;overflow:auto;padding:5px;background-color:#FCFADD;color:#714D03;border:4px double #DEBB07; position: fixed;">

<?php 
	    
	while( $row = mysqli_fetch_array($result)){
		$date = $row['date'];
		$title = $row['title']; 
		echo("<a href='announcement_details?title=$title' style='text-decoration:none;'>
					$date &emsp; &emsp; $title <br>
				</a>");
	}
?>

</div>


    
    
</body>
</html>