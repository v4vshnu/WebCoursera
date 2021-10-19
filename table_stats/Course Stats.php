<?php
include("../config.php");
session_start();

$sql = "SELECT * FROM user WHERE admin = 0";

$result = mysqli_query($db,$sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couurse Statistics</title>
	<!-- <link rel="stylesheet" href="../styles.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>

<nav class=" navbar-inverse">
        <div class="nav-bar container-fluid ">
            <ul class="nav navbar-nav ">
                <li><a class="nav-bar-header" href="Dashboard.html" style="font-size: 25px;">WebCoursera</a></li>
                <li class="activate nav-bar-header"><a class="nav-bar-header" href="About Us.html">About Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Contact.html">Contact Us</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="All Courses.html">Courses</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-bar-header"><a class="nav-bar-header" href="Signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li class="nav-bar-header"><a class="nav-bar-header" href="Login.html"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
            </ul>
        </div>
    </nav>


    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver6 m-b-110">
					<table data-vertable="ver6" class="sortable">
						<thead>
							<tr class="row100 head">
								<th class="column100 column0" >UID</th>
								<th class="column100 column1" >User Name</th>
								<th class="column100 column2" >Email ID</th>
								<th class="column100 column3" >Contact No</th>
								<th class="column100 column4" >HTML</th>
								<th class="column100 column4" >CSS</th>
								<th class="column100 column4" >Python</th>
								<th class="column100 column4" >JavaScript</th>
								<th class="column100 column4" >Java</th>
								<th class="column100 column4" >AJAX</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$i = 1;
							foreach($rows as $row){ 
						?>
							<tr class="row100">
								<td class="column100 column0" ><?php echo $i; ?></td>
								<td class="column100 column1" ><?php echo $row['fName']," ",$row['lName']; ?></td>
								<td class="column100 column2" ><?php echo $row['emailID']; ?></td>
								<td class="column100 column3" ><?php echo $row['phoneNo']; ?></td>
								<td class="column100 column4" ><?php 
								if($row['html'] == 0){
									echo "Not Registered";
								}
								else{
									echo "Registered";
								}
								 ?></td>
								<td class="column100 column4" ><?php 
								if($row['css'] == 0){
									echo "Not Registered";
								}
								else{
									echo "Registered";
								}
								 ?></td>
								<td class="column100 column4" ><?php 
								if($row['python'] == 0){
									echo "Not Registered";
								}
								else{
									echo "Registered";
								}
								 ?></td>
								<td class="column100 column4" ><?php 
								if($row['js'] == 0){
									echo "Not Registered";
								}
								else{
									echo "Registered";
								}
								 ?></td>
								<td class="column100 column4" ><?php 
								if($row['java'] == 0){
									echo "Not Registered";
								}
								else{
									echo "Registered";
								}
								 ?></td>
								<td class="column100 column4" ><?php 
								if($row['ajax'] == 0){
									echo "Not Registered";
								}
								else{
									echo "Registered";
								}
								 ?></td>
							</tr>
						<?php
						$i++;	
						}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
</html>