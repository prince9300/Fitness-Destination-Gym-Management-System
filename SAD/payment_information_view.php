<?php
session_start();
if(empty($_SESSION['email'])){
	header("Location:index.php");
}
?>
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'fdg_database'; // Database Name
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$sql = 'SELECT *
		FROM payment_information'; //table name
		
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
	<head>
		<title>Student pamyent information</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	</head>
	<body class="neon">
		<section>
			<header class="container" style="background-color:#202525">
				<div class="logo">
					<img src="images/fdg.png" alt="Logo">
					<p>FDG management System</p>
				</div>
				<nav class="nav_bar">
					<ul>
						<li class="active"><a href="success.php">Home</a></li>
						<li><a class="another_active" href="student_information_view.php">Student list</a></li>
						<li><a href="payment_information_view.php">Payment list</a></li>
						<li><a href="equipment_information_view.php">Equipment list</a></li>
						<li><a href="contact_information_view.php">Student contact</a></li>
						<li><a href="physique_information_view.php">Physique</a></li>
						<li><a href="admission_form_view.php">Admission</a></li>
						<li>
							<a class="btn btn-danger" href="logout.php">Logut</a></li>
						</ul>
					</nav>
				</header>
			</section>
			<section>
				<div class="container" data-aos="flip-up">
					<br>
					<br>
					<h1>Pamyent Information</h1>
					<div class="back">
						<a class="btn btn-light" href="success.php">Back</a>
					</div>
					<div class="insert">
						<a class="btn btn-success" href="payment_information_form.php">Insert Payment</a>
					</div>
					<!--table name-->
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th scope="col">Student id</th>
								<th scope="col">Student name</th>
								<th scope="col">Payment Date</th>
								<th scope="col">Payment month</th>
								<th scope="col">Amount</th>
								<th scope="col">Due</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while ($row=mysqli_fetch_assoc($query)){
							?>
							<tr>
								<td>
									<?php echo $row['Stu_id']; ?>
								</td>
								<td>
									<?php echo $row['Student_name']; ?>
								</td>
								<td>
									<?php echo $row['Payment_Date']; ?>
								</td>
								<td>
									<?php echo $row['Payment_month']; ?>
								</td>
								<td>
									<?php echo $row['Amount']; ?>
								</td>
								<td>
									<?php echo $row['Due']; ?>
								</td>
								<td>
									<a class="btn btn-info btn-sm" href="payment_information_indiView.php?Payment_id=<?php echo $row['Payment_id']; ?>">View</a>
									<a class="btn btn-success btn-sm" href="payment_edit.php?Payment_id=<?php echo $row['Payment_id']; ?>">Edit</a>
									<a class="btn btn-danger btn-sm" href="payment_delete.php?Payment_id=<?php echo $row['Payment_id']; ?>" onclick="return confirm('Are You sure?')">Delete</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</section>
			<section class="container">
				<footer>
					<p class="developer">
						<i class="fab fa-connectdevelop"> Developed by <strong>Peridot</strong></i>
					</p>
				</footer>
			</section>
			<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
			<script>
			AOS.init({
			duration: 2000,
			});
			</script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		</body>
	</html>