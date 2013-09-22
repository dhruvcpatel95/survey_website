<html>
	<head>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link href='http://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css'>
		<title>Test Website</title>
	</head>
	<body>
		<div id="wrapper">
			<!-- Header-->
			<div id="header">
				<h1>Dhruv's Website</h1>
				<ul id="navi">
					<li> <a href="index.html">Home</a></li>
					<li> <a href="survey.html">Survey</a> </li>
					<li> <a href="leave.html">Get off my page</a></li>
					<li> <a href="survey_data.php">Survey Data</a></li>
				</ul>
			</div>
		
			<!--Middle-->
			<div id="middle">
				<div id="content">
				<?php
					include('scripts\db_constants.php');
					include('scripts\db_connect.php');
					$query="SELECT * FROM survey ORDER BY first_name, last_name, age";
					$result=mysql_query($query);

					print "<h2>Survey Data</h2>";
					print "<p>Below is the list of all the people who filled out my survey. If you are one of these people, I Thank Thee for your kindness.</p>";
					print "<table style=margin:auto;>";
						print "<tr>";
							print "<th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Age</th>";
						print "</tr>";
						
						//row will return 0 when there are no more row left
						while($row=mysql_fetch_array($result))
						{
							$first=$row['first_name'];
							$last=$row['last_name'];
							$email=$row['email'];
							$age=$row['age'];
							
							print "<tr>";
								print "<td>$first</td>";
								print "<td>$last</td>";
								print "<td>$email</td>";
								print "<td>$age</td>";
							print "</tr>";
						}
					print "</table>";
					
				?>
				</div>
			</div>
		</div>
		<!--Footer-->
		<div id="footer">
			<p>Created by Dhruv Patel<p>
		</div>
	</body>
</html>

 