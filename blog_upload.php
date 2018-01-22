<?php

session_start();
if(!isset($_SESSION['rn']) && !isset($_SESSION['eid']))
{
	$result = 403;
  	header("Location: result.php?res=$result"); 
}
else
{
	if(!isset($_POST['blog_upload']))
	{
		$result = 403;
	  	header("Location: result.php?res=$result"); 
	}
	else
	{
		// For local hosting
		require('db_conn.php');

		if(!isset($conn))
		{
			$result = 500;
		  	header("Location: result.php?res=$result"); 
		}
		else
		{
			//print_r($_POST);
			$roll_no = mysqli_real_escape_string($conn,$_SESSION['rn']);
			$author = mysqli_real_escape_string($conn, $_SESSION['uname']);
			$category = mysqli_real_escape_string($conn, $_POST['category']);
			$title = mysqli_real_escape_string($conn, $_POST['title']);
			$content = mysqli_real_escape_string($conn, $_POST['content']);
			//print_r($_POST);
			print($content);

			$sql = "insert into blogs (roll_no,blog_timestamp,blog_title,blog_category,blog_author,blog_content) values ('$roll_no', CURRENT_TIMESTAMP, '$title', '$category', '$author', '$content')" ; 

			//echo "$sql";

			$result = mysqli_query($conn,$sql);

			if($result)
			{
				//echo("Blog submitted successfully. Redirecting you to the blogs page in 3 seconds.");
				//header('refresh:3;url=blogs.php');
				$result = 200;
				$com = 'blog submission successful';
				header("Location: result.php?res=$result&com=$com"); 
			}
			else
			{
				$result = 500;
		  		header("Location: result.php?res=$result"); 
			}
		}

	}
}

?>