<?php
	$first=$_GET['first'];
	$last=$_GET['last'];
	$email=$_GET['email'];
	$age=$_GET['age'];
	$comments=$_GET['comments'];
	if(isset($first)&&!empty($first)
	 &&isset($last)&&!empty($last)
	 &&isset($email)&&!empty($email)
	 &&isset($age)&&!empty($age)
	 &&isset($comments)&&!empty($comments))
	{
		//Connecting to database
		
		include('db_constants.php');
		include('db_connect.php');

		$query="INSERT INTO survey (first_name, last_name, email, age, comments) VALUES ('$first', '$last', '$email', '$age', '$comments')";
		$result = mysql_query($query); 
		if($result)
		{
			header("Location:..\survey_data.php");
		}
		else
		{
			print 'Query failed';
		}
		
		
	}
	else
	{
		header("Location:http://www.google.com/search?q=How+to+fill+out+a+form");
	}
	
	
	
	

?>