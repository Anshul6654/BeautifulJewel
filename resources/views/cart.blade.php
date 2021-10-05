<!--  This is the Cart page of Our Website 
 Created On date : 8/8/2021
 Updated : Set image and prices of total items -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

     <link rel="stylesheet" href="/css/style.css">     /* Added Css Files For Better Look of our website*/
</head>
<body>
    <x-Navbar $name="cart">
	<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
				<li>Cart</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<div id="body">
		<div class="container">
			<div id="content" class="full">
				<div class="cart-table">
					<table>
						<tr>
							<th class="items">Items</th>
							<th class="price">Price</th>
							<th class="qnt">Quantity</th>
							<th class="total">Total</th>
							<th class="delete"></th>
						</tr>
						<tr>
							<td class="items">
								<div class="image">
									<img src="images/6.jpg" alt="">
								</div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<p>Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
							</td>
							<td class="price">$1 350.00</td>
							<td class="qnt"><select><option>1</option><option>1</option></select></td>
							<td class="total">$1 350.00</td>
							<td class="delete"><a href="#" class="ico-del"></a></td>
						</tr>
						<tr>
							<td class="items">
								<div class="image">
									<img src="images/61.jpg" alt="">
								</div>
								<h3><a href="#">illum qui dolorem eum fugiat</a></h3>
								<p>Quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum.</p>
							</td>
							<td class="price">$2 100.00</td>
							<td class="qnt"><select><option>1</option><option>1</option></select></td>
							<td class="total">$2 100.00</td>
							<td class="delete"><a href="#" class="ico-del"></a></td>
						</tr>
						<tr>
							<td class="items">
								<div class="image">
									<img src="images/62.jpg" alt="">
								</div>
								<h3><a href="#">accusantium doloremque laudantium</a></h3>
								<p>Quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum.</p>
							</td>
							<td class="price">$1 050.00</td>
							<td class="qnt"><select><option>1</option><option>1</option></select></td>
							<td class="total">$1 050.00</td>
							<td class="delete"><a href="#" class="ico-del"></a></td>
						</tr>
					</table>
				</div>

				<div class="total-count">
					<h4>Subtotal: $4 500.00</h4>
					<p>+shippment: $30.00</p>
					<h3>Total to pay: <strong>$4 530.00</strong></h3>
					<a href="#" class="btn-grey">Finalize and pay</a>
				</div>
		
			</div>
			<!-- / content -->
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<x-Footer/>
</body>
</html>