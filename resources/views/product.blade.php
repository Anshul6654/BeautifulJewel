<!--  This is the  product page of Our Website 
 Created On date : 13/8/2021
 On this module : You can see all the products in this page -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	
	<link rel="stylesheet" media="all" href="css/style.css">
	<link rel="stylesheet" media="all" href="css/product.css">

</head>
<body>
<x-Navbar name="Product"/>
		
<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
				<li>Product results</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<div >
		<div class="container">
			<div class="pagination">
				
			</div>
			<div class="products-wrap">
				<aside id="sidebar">
					<div class="widget">                 <!--This is for filter the products in product page -->
						<h3>Products per page:</h3>
						<fieldset>							<!--This is for filter the products iamges by 8/16/32 per page -->
							<input checked type="checkbox">
							<label>8</label>
							<input type="checkbox">
							<label>16</label>
							<input type="checkbox">
							<label>32</label>
						</fieldset>
					</div>
					<div class="widget">
						<h3>Sort by:</h3>								<!--Sorted items by popularity/date/price -->
						<fieldset>
							<input checked type="checkbox">
							<label>Popularity</label>
							<input type="checkbox">
							<label>Date</label>
							<input type="checkbox">
							<label>Price</label>
						</fieldset>
					</div>
					<div class="widget">
						<h3>Condition:</h3>
						<fieldset>
							<input checked type="checkbox">
							<label>New</label>
							<input type="checkbox">
							<label>Used</label>
						</fieldset>
					</div>
					<div class="widget">
						<h3>Price range:</h3>							<!--Set price Range  -->
						<fieldset>
							<div id="price-range"></div>
						</fieldset>
					</div>
				</aside>
				<div id="content" class="img" >												<!--This all are the images of the products/items in product page-->
					<section class="products">
						<article>
							<a href="eachproduct"><img  src="images/11.jpeg" alt=""></a>
							<h3><a href="eachproduct">Ring</a></h3>
							<h4><a href="eachproduct">990 /-</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="eachproduct"><img src="images/12.jpeg" alt=""></a>
							<h3><a href="product.html">Ring</a></h3>
							<h4><a href="eachproduct">20000 /-</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/13.jpeg" alt=""></a>
							<h3><a href="product.html">Ring</a></h3>
							<h4><a href="product.html">26500 /-</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/14.jpeg" alt=""></a>
							<h3><a href="product.html">Ring</a></h3>
							<h4><a href="product.html">35000 /-</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/15.jpeg" alt=""></a>
							<h3><a href="product.html">Ring</a></h3>
							<h4><a href="product.html">15000 /-</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/1.jpeg" alt=""></a>
							<h3><a href="product.html">Ring</a></h3>
							<h4><a href="product.html">32000 /-</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/16.jpeg" alt=""></a>
							<h3><a href="product.html">Ring</a></h3>
							<h4><a href="product.html">26500 /-</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="images/17.jpeg" alt=""></a>
							<h3><a href="product.html">Ring</a></h3>
							<h4><a href="product.html">35000 /-</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
					</section>
				</div>
				<!-- / content -->
			</div>
			<div class="pagination">														<!--Pagination in the footer-->
				<ul>
					<li><a href="#"><span class="ico-prev"></span></a></li>
					<li class="active"><a href="#">1</a></li>
					<li ><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><span class="ico-next"></span></a></li>
				</ul>
			</div>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<x-Footer/>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>