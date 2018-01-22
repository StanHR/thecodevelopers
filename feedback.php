<?php

session_start();
if(!isset($_SESSION['rn']) && !isset($_SESSION['eid']) && !isset($_SESSION['uname']))
{
	$result = 403;
  	header("Location: result.php?res=$result");
}
else
{
	
	include("db_conn.php");
	$roll_no = $_SESSION['rn'];
	$user_name = $_SESSION['uname'];	
	$user_email = $_SESSION['eid'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="feedback.css">
</head>
<body>
	
<div> <!--for displaying the rating from other user-->
		<h1>Other ppl rating</h1>
		<?php
		$query="select * from feedback ORDER BY feed_id desc";
		$fetch_feedback = mysqli_query($conn,$query);
		if(!$fetch_feedback){
			die("query failed ".mysqli_error($conn));
				
		}
		else{
				while($row = mysqli_fetch_assoc($fetch_feedback)){
				$roll_no = $row['rn'];
				$user_name = $row['uname'];
				$email = $row['eid'];
				$feed_rating = $row['feed_rating'];
				$feed_msg = $row['feed_msg'];
					
					?>
				<br><br>	
			<label class="" for="rollno">Rollno:</label>
			<span id="rollno" name="rollno" > <?php echo $roll_no; ?> </span><br>

			<label class="" for="user_name">Name:</label>
			<span class="" id="user_name"  name="user_name" ><?php echo $user_name; ?></span><br>

			<label class="" for="user_email">Email:</label>
			<span class="" id="user_email" name="user_email"  ><?php echo $user_email; ?></span><br>

			<label class="" for="messgae">Message:</label>
			<span class="" name="message" id="messgae"  ><?php echo $feed_msg; ?></span><br>
			
			<label class="" for="rating">Rating:</label>
			<span class="" name="rating" id="rating"  ><?php echo $feed_rating; ?></span><br>
			
				<div class="stars">
		<?php for($i=0;$i<$feed_rating;$i++){
		
		
			
				echo "<span><i class='fa fa-star'></i></span>";
   				
					}
   				 ?>
		
				<br><br>
			</div>
					
		<?php }}}?>
	</div>

	<div>
	<h4>To make this Website better we need our feedback</h4>
	<form action="" method="post" role="form">
   
     <label class="" for="rollno">Rollno:</label>
	<input class="" id="rollno" disabled value="<?php echo $roll_no; ?>" type="text" name="rollno"/><br>
   
   <label class="" for="user_name">Name:</label>
	<input class="" id="user_name" disabled value="<?php echo $user_name; ?>" type="text" name="user_name"/><br>
	 
	 <label class="" for="user_email">Email:</label>
	<input class="" id="user_email"  disabled value="<?php echo $user_email; ?>"  type="text" name="user_email" /><br>
	 
	 <label class="" for="messgae">Message:</label>
	 <textarea class="" name="message" id="messgae" rows="5" for="messgae"></textarea><br>
    
    <div class="stars">
    <input class="star star-5" id="star-5" type="radio" value="5" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" value="4" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" value="3" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" value="2" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" value="1" name="star"/>
    <label class="star star-1" for="star-1"></label>
    </div>
    <button type="submit" name="create_feeedback" >Submit</button>
  </form>

 </div>
 <?php 
	if(isset($_POST['create_feeedback'])){
		$feed_msg = $_POST['message'];
		$feed_star = $_POST['star'];
				$feed_star =mysqli_real_escape_string($conn,$_POST['star']);

		if(empty($feed_msg)){
			echo "Canot leave msg empty";
			die("cannot leave msg emplty");
		}
		$query = "insert into feedback(roll_no,rating,feedback_text) values ('$roll_no','$feed_star','$feed_msg')";
		$feed_query =  mysqli_query($conn,$query);
		if(!$feed_query){
			die("query failed ".mysqli_error($conn));
		}
	}

?>
	
	
</body>
</html>