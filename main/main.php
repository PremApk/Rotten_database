<?php
session_start();
if(!isset($_SESSION['uname']))
	header("Location: ../login/login.html");
?>

<!DOCTYPE html>

<html lang="en" class="no-js">

<!-- homev2_light16:29-->
<head>
	<!-- Basic need -->
	<title>Rotten Database</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<div id="preloader">
    <img class="logo" src="images/logo.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!-- BEGIN | Header -->
<header class="ht-header full-width-hd" id="header-light">
		<div class="row">
			<nav id="mainNav" class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="#"><img class="logo" src="images/logo.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="btn"><a href="./comingsoon.php">Languages</a></li>
						&nbsp;	&nbsp;	&nbsp;
						<li class="btn"><a href="../login/login.html">Log out</a></li>
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    <!-- search form -->
		</div>
	
</header>
<?php
					$dbServername ="localhost";
					$dbUsername ="root";
					$dbpassword ="";
					$dbName ="ip";

					$movie_name = array();
					$rating = array();
					$imagepath = array();
					

					$conn= new mysqli($dbServername,$dbUsername,$dbpassword,$dbName);
					
					$sql = "select * from movie";
					$result = $conn->query($sql);
					if($result->num_rows >0)
					{
						while($row = $result->fetch_assoc())
						{
							array_push($movie_name,$row['m_name']);
							array_push($rating,$row['rating']);
							array_push($imagepath,$row['image']);
						}
					}
					$conn->close();
				 ?>
<div class="slider sliderv2">
	<div class="container">
		<div class="row">
	    	<div class="slider-single-item">
	    		<div class="movie-item">
	    			<div class="row">
	    				<div class="col-md-8 col-sm-12 col-xs-12">
	    					<div class="title-in">
			    				<div class="cate">
			    					<span class="blue"><a href="#">Thriller</a></span>
			    					<span class="yell"><a href="#">Love</a></span>
			    					<span class="orange"><a href="#">Adventure</a></span>
			    				</div>
			    				<h1><a href="#"><?php echo $movie_name[3]; ?>
								<span>2020</span></a></h1>
								<div class="social-btn">
									<a href="https://www.youtube.com/embed/hPybzXeEWSI" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
									<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
									<div class="hover-bnt">
										<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
										<div class="hvr-item">
											<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
										</div>
									</div>		
								</div>
			    				<div class="mv-details">
			    					<p><i class="ion-android-star"></i><span><?php echo $rating[3]; ?></span> /10</p>
			    					<ul class="mv-infor">
			    						<li>  Run Time: 2h21’ </li>
			    						<li>  Rated: PG-13  </li>
			    						<li>  Release: 28 Feb 2020</li>
			    					</ul>
			    				</div>
			    				<div class="btn-transform transform-vertical">
									<div><a href="#" class="item item-1 redbtn">more detail</a></div>
									<div><a href= "#" class="item item-2 redbtn hvrbtn">more detail</a></div>
								</div>		
			    			</div>
	    				</div>
	    				<div class="col-md-4 col-sm-12 col-xs-12">
		    				<div class="mv-img-2">
			    				<a href="#"><img src="<?php echo $imagepath[3]; ?>" alt=""></a>
			    			</div>
		    			</div>
	    			</div>	
	    		</div>
	    		<div class="movie-item">
	    			<div class="row">
	    				<div class="col-md-8 col-sm-12 col-xs-12">
	    					<div class="title-in">
			    				<div class="cate">
			    					<span class="blue"><a href="#">Love</a></span>
			    					<span class="yell"><a href="#">Fantasy</a></span>
			    					<span class="orange"><a href="#">Comedy</a></span>
			    				</div>
			    				<h1><a href="#"><?php echo $movie_name[6]; ?>
								<span>2020</span></a></h1>
								<div class="social-btn">
									<a href="https://www.youtube.com/embed/5lUWBM2uYaQ" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
									<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
									<div class="hover-bnt">
										<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
										<div class="hvr-item">
											<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
										</div>
									</div>		
								</div>
			    				<div class="mv-details">
			    					<p><i class="ion-android-star"></i><span><?php echo $rating[6]; ?></span> /10</p>
			    					<ul class="mv-infor">
			    						<li>  Run Time: 2h21’ </li>
			    						<li>  Rated: PG-13  </li>
			    						<li>  Release: 13 Feb 2020</li>
			    					</ul>
			    				</div>
			    				<div class="btn-transform transform-vertical">
									<div><a href="#" class="item item-1 redbtn">more detail</a></div>
									<div><a href= "#" class="item item-2 redbtn hvrbtn">more detail</a></div>
								</div>
			    				
			    			</div>
	    				</div>
	    				<div class="col-md-4 col-sm-12 col-xs-12">
		    				<div class="mv-img-2">
			    				<a href="#"><img src="<?php echo $imagepath[6]; ?>" alt=""></a>
			    			</div>
		    			</div>
	    			</div>	
	    		</div>
	    	</div>
	    </div>
	</div>
</div>
		<div class="buster-light">
<div class="movie-items  full-width">
	<div class="row">
		<div class="col-md-12">
			<div class="title-hd">
				<h2>in theater</h2>
				<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
			</div>
			<div class="tabs">
				<ul class="tab-links">
					<li class="active"><a href="#tab1-h2">#Popular</a></li>
					<li><a href="#tab3-h2">  #Top rated  </a></li>                       
				</ul>
				
			    <div class="tab-content">
			        <div id="tab1-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $imagepath[0]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[0]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[0]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
								<div class="slide-it">
									<div class="movie-item">
				            			<div class="mv-img">
										
										<img src="<?php echo $imagepath[1]; ?>" alt="">
				            				
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[1]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[1]; ?></span> /10</p>
				            			</div>
				            		</div>
								</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $imagepath[2]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[2]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[2]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $imagepath[3]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[3]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[3]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $imagepath[4]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[4]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[4]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $imagepath[5]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[5]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[5]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $imagepath[6]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[6]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[6]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $imagepath[7]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[7]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[7]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            	</div>
			            </div>
			        </div>
			    
			        <div id="tab3-h2" class="tab">
			        	<div class="row">
			            	<div class="slick-multiItem2">
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $imagepath[3]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[3]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[3]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
								<div class="slide-it">
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $imagepath[7]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[7]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[7]; ?></span> /10</p>
				            			</div>
				            		</div>
								</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $imagepath[4]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[4]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[4]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $imagepath[6]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[6]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[6]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $imagepath[1]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $movie_name[1]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $rating[1]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            	</div>
			            </div>
		       	 	</div>
			    </div>
			</div>

			<?php
					$dbServername ="localhost";
					$dbUsername ="root";
					$dbpassword ="";
					$dbName ="ip";

					$umovie_name = array();
					$urating = array();
					$uimagepath = array();
					

					$conn= new mysqli($dbServername,$dbUsername,$dbpassword,$dbName);
					
					$sql = "select * from upcoming";
					$result = $conn->query($sql);
					if($result->num_rows >0)
					{
						while($row = $result->fetch_assoc())
						{
							array_push($umovie_name,$row['m_name']);
							array_push($urating,$row['rating']);
							array_push($uimagepath,$row['image']);
						}
					}
					$conn->close();
				 ?>

			<div class="title-hd">
				<h2>Coming Soon</h2>
				<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
			</div>
			<div class="tabs">
				<ul class="tab-links-2">
					<li class="active"><a href="#tab21-h2">#Popular</a></li>
					<li><a href="#tab24-h2"> #Most tweeted</a></li>                        
				</ul>
			    <div class="tab-content">
			        <div id="tab21-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[0]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[0]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[0]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
								<div class="slide-it">
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[1]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[1]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[1]; ?></span> /10</p>
				            			</div>
				            		</div>
								</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[2]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[2]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[2]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[3]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[3]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[3]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[4]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[4]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[4]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[5]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[5]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[5]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[6]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[6]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[6]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[7]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[7]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[7]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            	</div>
			            </div>
			        </div>
		       	 	 <div id="tab24-h2" class="tab">
			        	<div class="row">
			            	<div class="slick-multiItem2">
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[0]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[0]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[0]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[3]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[3]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[3]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[4]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[4]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[4]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[5]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[5]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[5]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo $uimagepath[6]; ?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $umovie_name[6]; ?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?php echo $urating[6]; ?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            	</div>
			            </div>
		       	 	</div>
			    </div>
			</div>
		</div>
	</div>
</div>
<?php
					$dbServername ="localhost";
					$dbUsername ="root";
					$dbpassword ="";
					$dbName ="ip";

					$trailer_name = array();
					$timage = array();
					$link = array();
					

					$conn= new mysqli($dbServername,$dbUsername,$dbpassword,$dbName);
					
					$sql = "select * from trailer";
					$result = $conn->query($sql);
					if($result->num_rows >0)
					{
						while($row = $result->fetch_assoc())
						{
							array_push($trailer_name,$row['m_name']);
							array_push($link,$row['link']);
							array_push($timage,$row['image']);
						}
					}
					$conn->close();
				 ?>
<div class="trailers full-width">
		<div class="row ipad-width">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="title-hd">
					<h2>in theater</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="videos">
				 	<div class="slider-for-2 video-ft">
					   <div>
					    	<iframe class="item-video" src="#" data-src="<?php echo $link[0]; ?>"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="<?php echo $link[1]; ?>"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="<?php echo $link[2]; ?>"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="<?php echo $link[3]; ?>"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="<?php echo $link[4]; ?>"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="<?php echo $link[5]; ?>"></iframe>
					    </div>

					</div>
					<div class="slider-nav-2 thumb-ft">
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo $timage[0]; ?>"  alt="photo by Barn Images" width="4096" height="2737">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc"><?php echo $trailer_name[0]; ?></h4>
	                        	<p>2:30</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo $timage[1]; ?>"  alt="photo by Barn Images" 	width="350" height="200">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc"><?php echo $trailer_name[1]; ?></h4>
	                        	<p>2:37</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo $timage[2]; ?>" alt="photo by Joshua Earle" width="509" height="301">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc"><?php echo $trailer_name[2]; ?></h4>
	                        	<p>2:44</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo $timage[3]; ?>" alt="photo by Alexander Dimitrov" width="100" height="56">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc"><?php echo $trailer_name[3]; ?></h4>	
	                        	<p>2:43</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo $timage[4]; ?>"  alt="photo by Wojciech Szaturski" width="100" height="56">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc"><?php echo $trailer_name[4]; ?></h4>	
	                        	<p>2: 32</p>
	                        </div>	
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo $timage[5]; ?>"  alt="photo by Wojciech Szaturski" width="360" height="189">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc"><?php echo $trailer_name[5]; ?></h4>	
	                        	<p>3:11</p>
	                        </div>	
						</div>
					</div>
				</div>
			</div>

			
			<?php
					$dbServername ="localhost";
					$dbUsername ="root";
					$dbpassword ="";
					$dbName ="ip";

					$c_name = array();
					$cimagepath = array();
					

					$conn= new mysqli($dbServername,$dbUsername,$dbpassword,$dbName);
					
					$sql = "select * from celebrity";
					$result = $conn->query($sql);
					if($result->num_rows >0)
					{
						while($row = $result->fetch_assoc())
						{
							array_push($c_name,$row['c_name']);
							array_push($cimagepath,$row['image']);
						}
					}
					$conn->close();
				 ?>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="celebrities">
						<h4 class="sb-title">Spotlight Celebrities</h4>
						<div class="celeb-item">
							<a href="#"><img src="<?php echo $cimagepath[0]; ?>" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#"><?php echo $c_name[0]; ?></a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="<?php echo $cimagepath[1]; ?>" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#"><?php echo $c_name[1]; ?></a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="<?php echo $cimagepath[2]; ?>" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#"><?php echo $c_name[2]; ?></a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="<?php echo $cimagepath[3]; ?>" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#"><?php echo $c_name[3]; ?></a></h6>
								<span>Actor</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
</div>

<!-- footer v2 section-->
<footer class="ht-footer full-width-ft">
	<div class="row">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index-2.html"><img class="logo" src="images/logo.png" alt=""></a>
				<p>Call us: <a href="#">(91+) 9677070301</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="#">About</a></li> 
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help Center</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="#">Terms of Use</a></li> 
					<li><a href="#">Privacy Policy</a></li>	
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" placeholder="Enter your email">
				</form>
				<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
		<div class="ft-copyright">
			<div class="ft-left">
				<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
			</div>
			<div class="backtotop">
				<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
			</div>
		</div>
	</div>
</footer>
<!-- end of footer v2 section-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- homev2_light16:30-->
</html>