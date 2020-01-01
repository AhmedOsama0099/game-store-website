<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "12345678", "itproject");
	 if (isset($_GET['logout'])) 
        {
            session_destroy();
            unset($_SESSION['email']);
            header("location: login.php");
        }

        if(!isset($_SESSION['email']))
        {
            header('location: LogIn.php');
        }
        ?>
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>ARM</title>

	

		<!-- Loading main css file -->
		<link rel="stylesheet" href="css/style2.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body class="slider-collapse">
		
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<div id="logoo">
						
						<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">ARM</h1>
						</div>
						</a> <!-- #branding -->
					</div>
					
					<div class="col-md-2">
								<form method="get" class="widget">
									<h3 class="widget-title"><?php echo"$_SESSION[email]" ?></h3>
									<li><input type=submit name=logout value=LOGOUT ></li>
								</form> <!-- .widget -->
					</div> <!-- column -->

					<div class="main-navigation">
						<button class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item home current-menu-item"><a href="index.html"><i class="icon-home"></i></a></li>
							<li class="menu-item"><a href="home.php">Accessories</a></li>
							<li class="menu-item"><a href="home.php">Promotions</a></li>
							<li class="menu-item"><a href="home.php">PC</a></li>
							<li class="menu-item"><a href="home.php">Playstation</a></li>
							<li class="menu-item"><a href="home.php">Xbox</a></li>
							<li class="menu-item"><a href="home.php">Wii</a></li>
						</ul> <!-- .menu -->
						<div class="search-form">
							<label><img src="images/icon-search.png"></label>
							<input type="text" placeholder="Search...">
						</div> <!-- .search-form -->

						<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
					</div> <!-- .main-navigation -->
				</div> <!-- .container -->
			</div> <!-- .site-header -->

			

			<main class="main-content">
				<div class="container">
					<div class="page">
						<section>
							<header>
								<h2 class="section-title">New Products</h2>
								<a href="#" class="all">Show All</a>
							</header>

							<div class="product-list">
								<?php
									$query = "SELECT * FROM products ORDER BY id DESC";  
								    $result = mysqli_query($connect, $query);  
									while($row = mysqli_fetch_array($result))  
									{
										$n=$row['name'];
										if(strlen($n)>10){
											$n=substr($n,0,10).'....';
										}
										$d=$row['descreption'];
										if(strlen($d)>10){
											$d=substr($d,0,10).'....';
										}
										echo '
											<div class="product">
												<div class="inner-product">
													<div class="figure-image">
														<a ><img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" alt="Game!"></a>
													</div>
													<h3 class="product-title"><a href="#">'.$n.'</a></h3>
													<small class="price">'.$row['price'].'</small>
													<p>'.$d.'</p>
													<!--<a href="cart.html" class="button">Add to cart</a>-->
													<a href="single.php?id='.$row['id'].'"class="button muted">Read Details</a>
												</div>
											</div>    
										 ';  
									}
								?>
								

							</div> <!-- .product-list -->

						</section>

						
					</div>
				</div> <!-- .container -->
			</main> <!-- .main-content -->

		</div>


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>