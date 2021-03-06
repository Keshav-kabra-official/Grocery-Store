<!DOCTYPE html>
<html>
	<head>
		<title>The ShopMall</title>

		<meta name="description" content="This is an online Grocery Store website.">
		<meta name="keywords" content="Grocery, retail, shop, purchase">
		<meta http-equiv="content-language" content="en-us">
		<meta http-equiv="author" content="Keshav Kabra">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel='stylesheet'href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='			sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<script src="js/jquery-1.11.1.min.js"></script>

		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- start-smooth-scrolling -->
		<!-- To-Top icon and functionality -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>

	</head>
<!-- ---------------------------------------- //HEAD -------------------------------------------- -->

<!-- ----------------------------------------- BODY ---------------------------------------------- -->
	<body>

		<!-- ----------------- NAV-BAR -------------------- -->
		<nav class="navbar navbar-inverse">
			<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="	#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <div class="header-left">
				      <h3><a href="index.html" style="color:#fff;}">The ShopMall</a></h3>
				      </div>
			    </div>
			    
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<div class="product_list_header">  
							<form action="pay.php" method="post" class="last">
				                <fieldset>
				                    <input type="hidden" name="cmd" value="_cart" />
				                    <input type="hidden" name="display" value="1" />
				                    <input type="submit" name="submit" value="View your cart" class="button" />
				                </fieldset>
				            </form>
						</div>
						<!-- USER LOGIN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><h4><i class="fa fa-user" aria-hidden="true"></i></h4><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="login.html">Login</a></li> 
								<li role="separator" class="divider"></li>
								<li><a href="login.html">Sign Up</a></li>
							</ul>
						</li>
						<!-- Dropdown Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h4>Most Demanded</h4><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="fruits.html">Fruits & Vegetables</a></li>
								<li><a href="petFoods.html">Pet Food</a></li>
								<li><a href="bakery.html">Bread & Bakery</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="drinks.html">Juices</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="cosmetics.html">Cosmetics</a></li>
							</ul>
						</li>
						<div class="header-right">
							<h3><a href="contact us/formFinal.html">Contact Us</a></h3>
						</div>
					</ul>
			    </div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>

		<a href="index.html"><img id="logo" src="img/logo.jpg" content="The ShoppingMall"></a>

		<!-- -------------------------------- TOP BRANDS --------------------------------- -->
		<div class="top-brands">
		<div class="container">
			<h3>Hot Offers</h3>
			<div class="agile_top_brands_grids">
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column"> <!-- Shine on hovering -->
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
											<img title=" " alt=" " src="img/1.png" />
											<p>fortune sunflower oil</p>
											<h4>$7.99 <span>$10.00</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="pay.php" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
													<input type="hidden" name="amount" value="7.99" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" >
										<div class="snipcart-thumb">
											<img title=" " alt=" " src="img/2.png" />
											<p>basmati rise (5 Kg)</p>
											<h4>$11.99 <span>$15.00</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="pay.php" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="basmati rise" />
													<input type="hidden" name="amount" value="11.99" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<img src="img/3.png" alt=" " class="img-responsive" />
											<p>Pepsi soft drink (2 Ltr)</p>
											<h4>$8.00 <span>$10.00</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="pay.php" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Pepsi soft drink" />
													<input type="hidden" name="amount" value="8.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<img src="img/4.png" alt=" " class="img-responsive" />
											<p>dogs food (4 Kg)</p>
											<h4>$9.00 <span>$11.00</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="pay.php" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="dogs food" />
													<input type="hidden" name="amount" value="9.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- --------------------------------- //TOP-BRANDS -------------------------------------- -->

	<!-- -------------------------------- OTHER LINKS ---------------------------------------- -->
	<div class="top-brands">
		<div class="container">
			<h3>See our other Products</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="list-group ">
						<a href="products.html" class="list-group-item list-group-item-info"><b>Popular</b></a>
						<a href="fruits.html" class="list-group-item list-group-item-danger"><b>Vegetables & Fruits</b></a>
						<a href="edibles.html" class="list-group-item list-group-item-info"><b>Spices & Edibles</b></a>
						<a href="instant.html" class="list-group-item list-group-item-danger"><b>Instant</b></a>
						<a href="drinks.html" class="list-group-item list-group-item-info"><b>Juices & Soft-Drinks</b></a>
						<a href="bakery.html" class="list-group-item list-group-item-danger"><b>Bread & Bakery</b></a>
						<a href="dry-fruits.html" class="list-group-item list-group-item-info"><b>Dry Fruits</b></a>
						<a href="petFoods.html" class="list-group-item list-group-item-danger"><b>Pet Food</b></a>
						<a href="dairy.html" class="list-group-item list-group-item-info"><b>Dairy</b></a>
						<a href="cosmetics.html" class="list-group-item list-group-item-danger"><b>Cosmetics</b></a>						
						<a href="household.html" class="list-group-item list-group-item-info"><b>Cleaning</b></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ----------------------------- FOOTER ---------------------------- -->
	<div class="footer">
		<div class="agile_footer_grids">
			<div class="footer_grid_bottom">
				<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Connect With Us</h4>
				<ul class="agileits_social_icons">
					<li><a href="#" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
					<li><a href="#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="google"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
					<li><a href="#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#" class="quora"><i class="fab fa-quora" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
		<div class="footer_copy">
			<p>&copy; 2019 <a href="#">The ShopMall</a>. All rights reserved | Design with &hearts; by <a href="#">Keshav Kabra</a></p>
		</div>
	</div>


	<!-- -------------------------------- BOOTSTRAP CORE JAVASCRIPT ------------------------------------ -->
	<script src="js/bootstrap.min.js"></script>
	<!-- DropDown NavBar Funcctionality -->
	<script>
		$(document).ready(function(){
			$(".dropdown").hover(            
				function() {
					$('.dropdown-menu', this).stop( true, true ).slideDown("medium");
					$(this).toggleClass('open');        
				},
				function() {
					$('.dropdown-menu', this).stop( true, true ).slideUp("medium");
					$(this).toggleClass('open');       
				}
			);
		});
	</script>

	<!-- scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>

	<!-- Add-to-Cart Option Functionality -->
	<script src="js/minicart.js"></script>
	<script>
		paypal.minicart.render();

		var xx = '';
		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
			len = items.length,
			total = 0,
			i;

			/*for (i = 0; i < len; i++) {
				alert(items[i].get('item_name'));
			}*/

			for (i = 0; i < len; i++) {
				t = items[i].get('quantity'); //number of items
				amt = t*items[i].get('amount') - t; //final price -- reduce discount
				xx += items[i].get('item_name')+' '+ t +' '+ amt +'\n';
			}
			alert(xx);


			// <?php
			// 	$var = xx;
			// ?>
			

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}
			console.log(xx);
			Sleep(3000);
		});
	</script>

	</body>
</html>