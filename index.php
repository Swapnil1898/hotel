<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<link rel="icon" href="images/celebration logo.PNG" type="image/jpeg">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
     <!-- Site Metas -->
    <title>The Celebration Resto & Bar</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/celebration logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style2.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<!--Text animation -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>// Wrap every letter in a span
var textWrapper = document.querySelector('.ml1 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml1 .letter',
    scale: [0.3,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 600,
    delay: (el, i) => 70 * (i+1)
  }).add({
    targets: '.ml1 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700,
    offset: '-=875',
    delay: (el, i, l) => 80 * (l - i)
  }).add({
    targets: '.ml1',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });</script>
</head>

<body>
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-dark">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/l1.png" alt="" height="100px" width="250px"/>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link js-scroll-trigger" href="#slides">Home</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#aboutsection">About</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#gallerysection">Gallery</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#specialmenusection">Menu</a></li>
					    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#reservationsection">Reservation</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contactsection">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/w11.jpeg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Celebration Restaurant & Bar</strong></h1>
							<p class="m-b-40">Your Enjoyment And Satisfaction Will Be Our Priority.<br></p>
							
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/s6.jpeg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Celebration Restaurant & Bar</strong></h1>
							<p class="m-b-40">Welcome To Our Place. You Will Find Happiness Drinks & Food  Here.</p>
							
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/s4.jpeg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Celebration Restaurant & Bar</strong></h1>
							<p class="m-b-40"> Eat Drink And Be Merry.</p>
							
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	

	
	
	
	
	<div id="aboutsection">
		<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 <!--col-md-6--> text-center">
					<div class="inner-column">
					    
						<h1 style="color:#800000;">Welcome To The Celebration Restaurant & Bar</h1>
						<h4><b>Little Story</b></h4>
						<p ><b>The Celebration Restaurant & Bar was successfully launched on 30 December 2020 and invites you to join the locals in our fun and friendly atmosphere.We are situated near to Pune's Kharadi bypass.</b><p>

 
					<p>	<b>Our mission is to provide outstanding homemade food at a fair price while ensuring excellent quality and service.Enjoy a variety of appetizers, steaks, pasta, baked desserts and regular specials, from classic favorites to modern cuisine. We give a bar that's full.</b></p>

							<p><b>Come and join us for breakfast, lunch or dinner and dine in the freshly renovated dining room or on our outdoor patio.</b></p>
						
						
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<img src="images.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-12" style="color:black">
					<div class="inner-pt" >
						<p><b>So every meal you have at the restaurant is the product of a lot of time spent visiting the local kitchens in these countries, followed by our own inventions, cooking and tasting to bring you the perfect innovative twist on your plate over again!</b></p>
						<p><b>The ingredients used in our cooking are all grown locally.In all our sourcing and cooking of ingredients, we follow the Slow Food Movement guidelines!</b></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
		</div>

		<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead "><b>
						" Keep Out Of The Way And Thank The Chef If You're Not The One Cooking. "</b>
					</p>
					<span class="lead"></span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->

		

			

		
	
				<div id="gallerysection">
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/g1.jpeg">
							<img class="img-fluid" src="images/g1.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-02.jpg">
							<img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/g2.jpg">
							<img class="img-fluid" src="images/g2.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-04.jpg">
							<img class="img-fluid" src="images/gallery-img-04.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/m2.png">
							<img class="img-fluid" src="images/m2.png" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-06.jpg">
							<img class="img-fluid" src="images/gallery-img-06.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/s4.jpeg">
							<img class="img-fluid" src="images/s4.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/s5.jpeg">
							<img class="img-fluid" src="images/s5.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/s1.jpeg">
							<img class="img-fluid" src="images/s1.jpeg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- End Gallery -->
	
	
	
<!-- End Contact info -->
<div id="specialmenusection">
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>SPECIAL MENU</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div id="section1">
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>The Essence Of A Thoughtful Spring Menu Is To Add Flavorful Color To Life On The Table!</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cocktails</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mocktails</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Shots</a>
						<a class="nav-link" id="v-pills-starter-tab" data-toggle="pill" href="#v-pills-starter" role="tab" aria-controls="v-pills-starter" aria-selected="false">Starters</a>
						<a class="nav-link" id="v-pills-veg-tab" data-toggle="pill" href="#v-pills-veg" role="tab" aria-controls="v-pills-veg" aria-selected="false">Veg Main-Course</a>
						<a class="nav-link" id="v-pills-nonveg-tab" data-toggle="pill" href="#v-pills-nonveg" role="tab" aria-controls="v-pills-nonveg" aria-selected="false">Non-veg Main Course</a>
						<a class="nav-link" id="v-pills-pdf-tab" data-toggle="pill" href="#v-pills-pdf" role="tab" aria-controls="v-pills-pdf" aria-selected="true">Menucard</a>
					</div>
				</div>
				<!--All menu-->
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/long ice land.jpeg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Cocktail</h4>
											<p></p>
											<h5></h5>
										</div>
									</div>
								</div>
								
								
								
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/m1.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Mocktail</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/sh1.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Shots</h4>
											<p></p>
											<h5></h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sa1.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Starter</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/v1.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Veg Menu</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/n1.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Non-veg Menu</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<!--end all menu-->

						<!--cocktail menu-->
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/long ice land.jpeg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Long Ice Land Iced Tea</h4>
											<p>Vodka,Silver Tequila,white rum,Gin Tripple Sec. Lemon Juice, Coke to top</p>
											<h5></h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/c3.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Mojito</h4>
											
											<p>white rum,mintlime,suger Syrup with crusherd ice</p>

											
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/c2.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Bloody Marry</h4>
											<p>Vodka Tomato Juice,Worcestershire sauce,lemon juice Salt n crushed Black Pappers</p>
											<h5></h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/c5.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Pinacolada</h4>
											<p>White Rum,coconut water,pineapple Juice Golden Anjeo rum,with pineapple Slice</p>
											<h5></h5>
										</div>
									</div>
								</div>
  								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/c6.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Strawerry Basil Fizz</h4>
											<p>Vodka,Strawbery syrup,lime,honey,basil</p>
											<h5></h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/c1.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Blue-Lagoon</h4>
											<p>Vodka, Blue Curraco, Sprite,Cube ice Lemon Slice</p>
											<h5></h5>
										</div>
									</div>
								</div>
							</div>
							
						</div>

						<!--End cocktail-->

						<!--start mocktail-->

						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/m1.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Orange Basil Mojito</h4>
											<p>Orange Juice,orange Slice,basil with ice cubes</p>
											<h5></h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/m2.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Morning Sunrise</h4>
											<p>Pineapple Juice,Orange,Juice,Granadine Syp,Lemon Juice,With Ice-Cubes</p>
											<h5> </h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/m4.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Guava Marry</h4>
											<p>Guava Juice,Tabbasc,Salt Lemon</p>
											<h5> </h5>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/m5.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Virgin Pinacolada</h4>
											<p>Coconut Cream,Freash Cream,Pineapple Juice,Ice-Cream Pinacolada Syrup</p>
											<h5> </h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/m6.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Crushed Ice Mango </h4>
											<p>Mango Juice,litchy,Mango Crush with ice</p>
											<h5> </h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/m3.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Virgin Mojito </h4>
											<p>Mint,Lime,Suger Syrup,Sprite</p>
											<h5></h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end moctail-->

						<!--shots-->
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sh1.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>B 52</h4>
											<p></p>
											<h5></h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sh2.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Camino </h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sh4.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Baileys </h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sh5.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>BWM </h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sh6.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Baileys Irish cream liqueur.coffee liqueur.tripple sac.</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sh3.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Tequila Shots</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
							</div>
						</div>
  						<!--end shots-->
						
						<!--starters-->
						<div class="tab-pane fade" id="v-pills-starter" role="tabpanel" aria-labelledby="v-pills-starter-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sa1.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Magic Mushroom</h4>
											<p></p>
											<h5></h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sa2.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Corn Cheese Ball</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sa4.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Fish/Prwans Tikka</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sa5.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Tandoori Salad</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sa6.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>French frise</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/sa3.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Egg Omlatte</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
							</div>
						</div>
  						<!--end starters-->

						<!--veg-->
						<div class="tab-pane fade" id="v-pills-veg" role="tabpanel" aria-labelledby="v-pills-veg-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/v1.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Paneer Makhani</h4>
											<p></p>
											<h5></h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/v2.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Veg Seekh Kebab Masala</h4>
											<p></p>
											<h5></h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/v3.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Paneer Angara Masala</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/v5.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Kashmiri Pullav</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/v6.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Punjabi Dal Tadka in desi ghee</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>


								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/v4.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Tandoori Mix-Veg Masala</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
							</div>
						</div>
  						<!--end veg-->

						<!--nonveg-->
						<div class="tab-pane fade" id="v-pills-nonveg" role="tabpanel" aria-labelledby="v-pills-nonveg-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/n1.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Butter Chicken</h4>
											<p></p>
											<h5></h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/n2.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Mutton Sukha</h4>
											<p></p>
											<h5></h5>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/n4.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Roasted Murg Handi</h4>
											<p></p>
											<h5></h5>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/n5.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Murgh Tikka Masala</h4>
											<p></p>
											<h5></h5>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/n6.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Hydrabadi Dum Biryani</h4>
											<p></p>
											<h5></h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/n3.png" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Murgh Kalimirch Masala</h4>
											<p></p>
											<h5> </h5>
										</div>
									</div>
								</div>
							</div>
						</div>
  						<!--end nonveg-->

						
						<div class="tab-pane fade" id="v-pills-pdf" role="tabpanel" aria-labelledby="v-pills-pdf-tab">
							<object data="mm2.pdf" type="application/pdf" width="800" height="500">

							</object>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
						</div>
	<!-- End Menu -->

	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">AMOL NIMBALKAR</strong></h5>
								<h6 class="text-dark m-0">Software Developer</h6>
								<p class="m-0 pt-3">A very trendy spot with mind-blowing food. Me and My friends enjoy alot here. All the best.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">AKSHAY RAJURKAR</strong></h5>
								<h6 class="text-dark m-0">Artist</h6>
								<p class="m-0 pt-3">A very nice and clean property with friendly staff and great food. Location is also nice.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">PRIYA DESHMUKH</strong></h5>
								<h6 class="text-dark m-0">Dancer</h6>
								<p class="m-0 pt-3">Very nice food and superb hospitality by Susila. Service is awesome. Good food overall. Memorable experience</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	<div id="reservationsection">
		<div class="all-page-title page-breadcrumb">
			<div class="container text-center">
				<div class="row">
					<div class="col-lg-12">
						<h1>RESERVATION</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- Start Reservation -->
<div class="reservation-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>RESERVATION</h2>
					<p>BEST Experience With Food</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<div class="contact-block">
					<form action="" method="POST"  >
						             
						<div class="form-group">
						  <input id="input_date" class="form-control" name="input_date"  placeholder="Enter date" type="text" value="" equired data-error="Please enter Date">
						</div>
						<div class="form-group">
						<input id="input_time" class="form-control" name="input_time" placeholder="Enter time with (AM/PM)" required data-error="Please enter time">
						</div>
						<div class="form-group">
						<select class="custom-select d-block form-control" id="person" name="persons" required data-error="Please select Person">
						  <option disabled selected>Select Person*</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="more">More</option>
						</select>
						</div>
				 
				 
					   <div class="form-group">
						  <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
						</div>
						<div class="form-group">
						  <input type="text"  id="email" class="form-control" placeholder="Your Email" name="email" required data-error="Please enter your email">
						</div>
						<div class="form-group">
							<input type="text" id="phone" class="form-control" placeholder="Your Mobile NO." name="phone" required data-error="Please enter your Mobile no.">
					 </div>
					  <center>
					<input type="submit" class="btn btn-common" id="submit" name="submit" value="Submit">
					</center>
					 
				
		
	</form>
		
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Reservation -->
		</div>
	
	<!-- End All Pages -->
	
	<!-- Start blog details -->
	

	<div id="contactsection">
		<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>CONTACT</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	<div class="map-full"></div>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<p>IN ANY KIND OF Problem, Feel Free To Contact Us</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form action="" method="POST"  >
									 
									 
						<div class="form-group">
						   <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
						 </div>
						 <div class="form-group">
						   <input type="text"  id="email" class="form-control" placeholder="Your Email" name="email" required data-error="Please enter your email">
						 </div>
						 <div class="form-group">
						   <input type="text"  id="phone" class="form-control" placeholder="Your Mobile no." name="phone" required data-error="Please enter your Mobile no.">
						 </div>
						 <div class="form-group">
						 <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
					  </div>
					   <center>
					 <input type="submit" class="btn btn-common" id="submit" name="submit2" value="Submit">
					 </center>
					  
				 
		 
	 </form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->
		</div>
	
	
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+91 7020593961
						</p>
					</div>
				</div>
				<div class="col-md-4 ">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
						thecelebration3@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							City-Vista Kharadi,pune 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>The Celebration Restuarant has been successfully owned and operated From 2020 and invites you in our fun and friendly atmosphere to drop by and join the locals. </p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Order Now</h3>
					<div class="subscribe_form">
						<a class="button" style="color: azure;"   href="tel:+917020593961"><img src="images/contact.png "; style="width:40px"; "height:40px";>Contact Now</a>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://www.facebook.com/The-Celebration-Family-Restro-Bar-101797511859959"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/thecelebrationrestrobar/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">"A"-Building Ground Floor City Vista Tower,Kharadi,Pune  </p>
					<p class="lead"><a href="#">+91 7020593961</a></p>
					<p><a href="#"> thecelebration3@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					
					<p><span class="text-color">Monday-Sunday :</span> 9:00 AM-11:00 PM</p>
				
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2020 <a href="#">The  Celebration Restro & Bar</a> 
					<a href="https://html.design/"></a>Designed By:Radiant It Services Pvt.Ltd.</p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="" aria-hidden="true"></i> <img src="images/qrcode.jpeg" height="100px" width="100px"></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    
    <script type="text/javascript">
	$('.js-scroll-trigger').click(function()
	{
		$('.navbar-collapse').collapse('hide');
	});
	</script>
</body>
</html>


<!--PhP Starts here................................-->
<?php
   $dbhost = 'localhost';
   $dbuser = 'u620778507_celeb_user';
   $dbpass = 'Rg3rvwt6]M';
   $dbname='u620778507_celeb_db';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   error_reporting(0);
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   echo '';

   /*if ($mysqli -> select_db('Celebration') === false) {
      $sql = 'CREATE Database Celebration';
   $retval = mysqli_query( $conn,$sql );
      
      if( $retval ) {
          
   echo "Database test_db created successfully\n";
         
      }
      else{
         die('Could not create database OR I May already exist  check Database ' . mysqli_error());
      }
  }
   */


  if( $_POST['submit']  )
  {
   $date=$_POST['input_date'];
   $time=$_POST['input_time'];
   $persons=$_POST['persons'];
   $un=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];

   
  
   

echo$un.$date.$time.$email.$phone.$persons;

     if($un!="" && $date!="" && $time!="" && $persons!="" && $email!=""  && $phone!="")
     {  
      
        $query2="Insert into reservation values('$un','$date','$time','$persons','$email','$phone')";
        $data=mysqli_query($conn,$query2);
        if($data)
        {
           # header('location:login.php');
           echo '<script>alert("Reservation Request Sent, Wait for our call..")</script>'; 
        }


     }else{echo"All fields are Required...";}


	}

   if($_POST['submit2'])
   {
	$un=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$phone=$_POST['phone'];

	echo$un."  ".$email."  ".$message." ".$phone;
	if($un!="" && $email!="" && $phone!="" && $message!="")
	{  
	 
	   $query2="Insert into contact values('$un','$email','$phone','$message')";
	   $data=mysqli_query($conn,$query2);
	   if($data)
	   {
		  # header('location:login.php');
		  echo '<script>alert("Message Sent... to  the Manager")</script>'; 
	   }


	}else{echo"All fields are Required...";}


   }









?>