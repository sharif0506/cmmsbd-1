<html lang="en">
	<head>
        <title>CMMS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php include "header.php"; 
			//include "createNewWork.php"; 
		?>
		<div class="container">
			<hr>
		<?php
			/*
			session_start();

			$user_role = ''; 
			$user_role = $_SESSION["name"];

			if($_SESSION["name"]=="admin"){
				echo	'<div class="row"><div align="center"><button class="btn btn-primary" data-toggle="modal" data-target="#createWork">Create Work</button>';
				echo	'</div></div>';
			}
			*/
		?>
			<div class="row">
				<div class="span12 text-justify">
					<h1>Our Work</h1>
					<br>
					<p>CMMS have been working towards establishing human rights for all and to ensure peaceful society but Gender based 
						Violence is so strongly rooted in the structural as well as personal level of our society that enacting different
						laws by government has been proved to be ineffective even to reduce Gender based Violence where to stop violence is
						an out of reach concern.
					</p>
				</div>
			</div>
			<hr>
			<div class="text-justify">
				<?php
					/*
					include "dbconnection.php";
					$query = "SELECT * FROM `ourwork`";
					$result = mysqli_query($con, $query);
					$rowCount = 2;
					while($row=mysqli_fetch_assoc($result)){
						if($rowCount%2 ==0){
							echo '<div class="row">';
							$rowCount=0;
						}
						
						echo '<div class="span2"><a href="'.$row["image_path"].'"><img src="'.$row["image_path"].'" alt="'.$row["title"].'"></a></div>';
						echo '<div class="span4"><a href="#"><h3>'.$row["title"].'</h3></a><br>';
						echo '<p>'.$row["description"].'</p>';
						
						if($_SESSION["name"]=="admin"){
						  echo '<form action="delete.php" method="POST">';
						  echo '<input type="hidden" name="id" value="'.$row["id"].'">';
						  echo '<input type="hidden" name="table_name" value="ourwork">';
						  echo '<button type="submit" class="btn btn-danger btn-lg">Delete</button>';
						  echo '</form>';
						}
						
						echo '</div>';
						if($rowCount%2 ==1)
							echo '</div>';
						$rowCount++;
					}
					*/
				?>
			</div>
		</div>
		<!-- /container
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/bootstrap-transition.js"></script>
		<script src="js/bootstrap-carousel.js"></script>
		<script src="js/bootstrap-alert.js"></script>
		<script src="js/bootstrap-modal.js"></script>
		<script src="js/bootstrap-dropdown.js"></script>
		<script src="js/bootstrap-scrollspy.js"></script>
		<script src="js/bootstrap-tab.js"></script>
		<script src="js/bootstrap-tooltip.js"></script>
		<script src="js/bootstrap-popover.js"></script>
		<script src="js/bootstrap-button.js"></script>
		<script src="js/bootstrap-collapse.js"></script>
		<script src="js/bootstrap-typeahead.js"></script>
		<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
		<script src="js/jquery.smooth-scroll.min.js"></script>
		<script src="js/lightbox.js"></script>
        -->
	</body>
</html>
