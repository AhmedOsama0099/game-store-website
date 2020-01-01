<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "12345678", "itproject");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Ecommerce Video Game | Single</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="css/style2.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
	
	</head>


	<body >
		
		<?php
		$id=$_GET['id'];
		$query = "SELECT * FROM products where id=$id";
		$result = mysqli_query($connect, $query);
		$row = mysqli_fetch_array($result);
		echo '
		
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">ARM</h1>
						</div>
					</a> <!-- #branding -->
				</div> <!-- .container -->
			</div> <!-- .site-header -->
			
			
			<main class="main-content">
				<div class="container">
					<div class="page">			
						<div class="entry-content">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<div class="product-images">
										<figure class="large-image">
											<img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" alt="Game!">
										</figure>
									</div>
								</div>
								<div class="col-sm-6 col-md-8" id="word">
									<h2 class="entry-title">'.$row['name'].'</h2>
									<small class="price">$'.$row['price'].'</small>
									<p>'.$row['descreption'].'</p>
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</main> <!-- .main-content -->
			<div class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-2"></div>
						<div class="col-md-2"></div>
						<div class="col-md-6"></div>
					</div><!-- .row -->
				</div> <!-- .container -->
			</div> <!-- .site-footer -->
		</div>
		';
		?>
	</body>

</html>