<!--  This is the Home Page of Our Website 
 Created On date : 1/8/2021
 Updated : Set all images and navbar updated 5/10/2021
 On this module : You can see the latest Items added by admin , Footer , Navbar , Login-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    

    <link rel="stylesheet" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

     <link rel="stylesheet" href="/css/style.css">									<!-- /* Added Css Files For Better Look of our website*/ -->
	 <link rel="stylesheet" href="/css/product.css">	
</head>
<body>

<x-Navbar name="login"/>
      

		<!-- This is for slideshow in home page -->
		<!-- Stating of Div carousalExamplecaptions -->
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">                  
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >					<!-- Div class carousal started -->
    <div class="carousel-item active">											<!-- By default this carousal slide would be actived -->	
      <img src="/images/106.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Genuine diamonds</h5>
        <p>Make your life better</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/105.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Engagement ring</h5>
        <p>She will say “yes”</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/106.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Golden bracelets</h5>
        <p>You deserve to be beauty</p>
      </div>
    </div>
  </div>                      <!-- Div class carousal ended -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"> <!-- This is the button for previous slide -->
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"> <!-- This is the button for next slide -->
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
</div>
	<!-- Ending of div carousalExamplecaptions -->
<!-- / body -->

	<div id="body" >
		<div class="container">
			<div class="last-products" >						<!-- This div for presenting last added items in our website -->
				<h2>Last added products</h2>
				<section class="products">
					<article>
						<img src="images/1.jpeg" alt="">					<!-- Set image and text for last addded items -->
						<h3>Expensive Ring</h3>
						<h4>3,000 /-</h4>
						<a href="cart.html" class="btn-add">Add to cart</a>
					</article>
					<article>
						<img src="images/11.jpeg" alt="">					<!-- Set image and text for last addded items -->
						<h3>Golden Ring</h3>
						<h4>10,000 /-</h4>
						<a href="cart.html" class="btn-add">Add to cart</a>
					</article>
					<article>
						<img src="images/12.jpeg" alt="">					<!-- Set image and text for last addded items -->
						<h3>Golden Thin Ring</h3>
						<h4>12,000 /-</h4>
						<a href="cart.html" class="btn-add">Add to cart</a>
					</article>
					<article>
						<img src="images/13.jpeg" alt="">					<!-- Set image and text for last addded items -->
						<h3>Golden Diamind Ring</h3>
						<h4>35,000 /-</h4>
						<a href="cart.html" class="btn-add">Add to cart</a>
					</article>
					<article>
						<img src="images/14.jpeg" alt="">					<!-- Set image and text for last addded items -->
						<h3>Golden Flower Ring</h3>
						<h4>32,000 /-</h4>
						<a href="cart.html" class="btn-add">Add to cart</a>
					</article>
					<article>
						<img src="images/15.jpeg" alt="">					<!-- Set image and text for last addded items -->
						<h3>Golden r Ring</h3>
						<h4>30,000 /-</h4>
						<a href="cart.html" class="btn-add">Add to cart</a>
					</article>
					<article>
						<img src="images/16.jpeg" alt="">					<!-- Set image and text for last addded items -->
						<h3>Golden F Ring</h3>
						<h4>15,000 /-</h4>
						<a href="cart.html" class="btn-add">Add to cart</a>
					</article>
					<article>
						<img src="images/17.jpeg" alt="">					<!-- Set image and text for last addded items -->
						<h3>Golden er Ring</h3>
						<h4>6,000 /-</h4>
						<a href="cart.html" class="btn-add">Add to cart</a>
					</article>
				</section>
			</div>
			
			<section class="quick-links">													<!--This section is for showing information about company -->
				<article style="background-image: url(images/102.jpg)">
					<a href="#" class="table">
						<div class="cell">
							<div class="text">
								<h4>Support Us</h4>
								<hr>
								<h3>For more Golden Jwellary items</h3>
							</div>
						</div>
					</a>
				</article>
				<article class="red" style="background-image: url(images/102.jpg)">
					<a href="#" class="table">
						<div class="cell">
							<div class="text">
								<h4>Benefits</h4>
								<hr>
								<h3>You can order items from home </h3>
								<hr>
								<p>Beautiful Jewel</p>
							</div>
						</div>
					</a>
				</article>
				<article style="background-image: url(images/102.jpg)">
					<a href="#" class="table">
						<div class="cell">
							<div class="text">
								<h4>Owner Of Beautiful Jewel</h4>
								<hr>
								<h3>Kevin Bhuva </h3>
							</div>
						</div>
					</a>
				</article>
			</section>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->
<x-Footer/>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>