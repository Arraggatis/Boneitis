<?php
	include '../forum/functions.php';
	require_once('../forum/config.php');
	session_start();

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	$tbl_name="topic"; // Table name
?>

<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<title>The Boulevard | Menu</title>
	<link rel="stylesheet" type="text/css" href="../style/base.css">
	<link rel="stylesheet" type="text/css" href="../style/menu.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="main-container">
		<nav class="nav-container">
			<div class="spacer"></div>
			<div id="logo-link">
				<a href="index.php"><img id="logo" src="../images/logo.png" width="100" height="165" alt="logo"></a>
				<div id="nav-links">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="gallery.php">Art</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="spacer"></div>
			<div id="login">
				<ul>
				<?php
					$name = $_SESSION['SESS_FIRST_NAME'];
					if (isLoggedIn()){
						echo '<li class="welcome">Welcome, '.$name.'!</li>';
						echo '<li><a href="../forum/logout.php">Logout</a></li>';
						echo '<li><a href="../forum/forum.php">Go to forum</a></li>';
						echo '<li><a href="../forum/add_topic_form.php">Create topic</a></li>';
					} else {
						echo '<li><a href="../forum/login_form.php">Login</a></li>';
						echo '<li><a href="../forum/register_form.php">Sign Up</a></li>';
					}
				?>
				</ul>
			</div>
			<div id="social-links">
				<a href="https://www.facebook.com/BoulevardCoffeeRoasting" target="_blank"><img src="../images/fb.png" height="30" width="30" alt="facebook"></a>
				<a href="https://twitter.com/blvdroastingco" target="_blank"><img src="../images/twitter.png" height="30" width="30" alt="twitter"></a>
				<a href="https://www.instagram.com/explore/locations/236693420/" target="_blank"><img src="../images/insta.png" height="30" width="30" alt="instagram"></a>
			</div>
		</nav>
			
		<div class="content-container">
			<div class="content">
				<main>
					<div id="flex">
						<div id="menu-items">
							<h2>Menu</h2>
							<div class="section group">
								<div class="col span_1_of_2">
									<h3>Food</h3>
									<dl class="menu">
										<dt><span class="item">Butter Croissant</span><span class="price">$3.10</span></dt>
										<dd>Made with orgranic flour and baked fresh in-house every morning.</dd>
										<dt><span class="item">Ham &amp; Cheese Croissant</span><span class="price">$3.81</span></dt>
										<dd>Butter Croissant filled with cheese and ham.</dd>
										<dt><span class="item">Bacon Blue Cheese Scone</span><span class="price">$3.57</span></dt>
										<dd>Baked from scratch daily with smoked bacon and sharp blue cheese.</dd>
										<dt><span class="item">Cranberry Walnut Scone</span><span class="price">$3.33</span></dt>
										<dd>Made with dried cranberries and crushed walnuts.</dd>
										<dt><span class="item">Banana Loaf</span><span class="price">$2.62</span></dt>
										<dd>Soft, moist, and baked to perfection.</dd>
										<dt><span class="item">Chocolate Chip Banana Loaf</span><span class="price">$2.62</span></dt>
										<dd>Banana bread with the sweetness of chocolate.</dd>
										<dt><span class="item">Fresh Fruit</span><span class="price">$1.19</span></dt>
										<dd>Vegan, gluten free. Nature's candy.</dd>
									</dl>
								</div>
								<div class="col span_1_of_2">
									<h3>&nbsp;</h3>
									<dl class="menu">
										<dt><span class="item">Jalapeno Pulled pork</span><span class="price">$7.86</span></dt>
										<dd>Aged white cheddar, jalapeno, pulled pork, all on a ciabatta bun.</dd>
										<dt><span class="item">Turkey Havarti</span><span class="price">$7.86</span></dt>
										<dd>Cranberries, romaine lettuce, on semonlina bread.</dd>
										<dt><span class="item">Pesto Prociutto Baguette</span><span class="price">$7.86</span></dt>
										<dd>Mozzarella, field greens, and cranberries on an organic french baguette.</dd>
										<dt><span class="item">Roast Vegetable Sandwich</span><span class="price">$7.62</span></dt>
										<dd>Roasted yams, portabello mushrooms, red peppers, and eggplant with roasted kale tofu dressing on an organic multigrain bun.</dd>
										<dt><span class="item">Pear Brie Walnut Baguette</span><span class="price">$7.86</span></dt>
										<dd>Balsamic Anjou pears, creamy brie, and roasted walnuts on an organic french baguette.</dd>
										<dt><span class="item">Capicolo Salami Panini</span><span class="price">$7.86</span></dt>
										<dd>Mozzarella, grilled peppers, and some field greens.</dd>
										<dt><span class="item">Pepper Bocconcini Panini</span><span class="price">$7.86</span></dt>
										<dd>Bocconcini and asiago cheese, grilled peppers, pesto and field greens.</dd>
									</dl>
								</div>
								<div class="col span_1_of_2">
									<h3>Coffees</h3>
									<dl class="menu">
										<dt><span class="item">Coffee of The Day</span><span class="price">$2.14</span></dt>
										<dd>Peru Penachi, Ethiopia Sidamo, or Papua New Guinea Enorga rotated daily.</dd>
										<dt><span class="item">Espresso Ristretto</span><span class="price">$2.86</span></dt>
										<dd>A double shot of our Pacific Spirit Espresso blend</dd>
										<dt><span class="item">Americano</span><span class="price">$2.86</span></dt>
										<dd>Espresso with water</dd>
										<dt><span class="item">Latte</span><span class="price">$3.81</span></dt>
										<dd>A double shot with velvety microfoamed milk</dd>
										<dt><span class="item">Cappucino</span><span class="price">$3.81</span></dt>
										<dd>A double shot with milk and rich foam</dd>
										<dt><span class="item">Mocha</span><span class="price">$4.29</span></dt>
										<dd>A latte with chocolate. What more could you ask for?</dd>
										<dt><span class="item">Caramel Macchiato</span><span class="price">$4.29</span></dt>
										<dd>Vanilla latte with caramel drizzle. Yum.</dd>
										<dt><span class="item">Vietnamese Latte</span><span class="price">$4.29</span></dt>
										<dd>A latte with condensed milk inside and drizzled on top. Lovely.</dd>
									</dl>
								</div>
								<div class="col span_1_of_2">
									<h3>&nbsp;</h3>
									<dl class="menu">
										<dt><span class="item">Mango Ginger Soda (16oz) </span><span class="price">$2.86</span></dt>
										<dd>Sweet mango with bright ginger. Fresh and light!</dd>
										<dt><span class="item">Peppermint Soda (16oz) </span><span class="price">$2.86</span></dt>
										<dd>Cool and refreshing. Perfect for a hot day.</dd>
										<dt><span class="item">Blackberry Soda (16oz) </span><span class="price">$2.86</span></dt>
										<dd>The blacker the berry, the sweeter the juice.</dd>
										<dt><span class="item">Frozen Mocha</span><span class="price">$4.52</span></dt>
										<dd>Mocha & chill. A perfect blend of espresso and dark chocolate.</dd>
										<dt><span class="item">Frozen After Eight Mocha</span><span class="price">$4.52</span></dt>
										<dd>Mocha & chill & more chill. Same as above, except with peppermint.</dd>
										<dt><span class="item">Frozen Vietnamese Latte</span><span class="price">$4.52</span></dt>
										<dd>A heavenly blended beverage sweetened with condensed milk.</dd>
										<dt><span class="item">Frozen Matcha</span><span class="price">$4.52</span></dt>
										<dd>Green Power! Rev up your day with powerful antioxidants.</dd>
									</dl>
								</div>
								<div class="col span_2_of_2">
									<dl>
										<dt class="coffees">Peru Penachi</dt>
										<dd>A bright acidity shines through a medium body; displaying notes of dried fruit. The finish is elegant and sweet.</dd>
										<dt class="coffees">Ethiopia Sidamo</dt>
										<dd>Clean tasting with notes of blueberry makes this a sweet refreshing drink from the birthplace of coffee itself.</dd>
										<dt class="coffees">Papua New Guinea Enorga</dt>
										<dd>A delightful unique coffee that has a sparkling top end, but is surprisingly full bodied with bold earthy tones and lintering notes of butterscotch.</dd>
									</dl>
								</div>
								<form name="order-form" action="http://webdevfoundations.net/scripts/formdemo.asp" method="post" onsubmit="return orderValidate()">
									<div class="col span_1_of_2">
										<h3>Your Order</h3>
										<textarea rows="8" name="order" placeholder="Enter your order" onblur="orderValidate()"></textarea><div id="order-error" class="error"></div>
									</div>
									<div class="col span_1_of_2">
										<h3>Instructions</h3>
										<textarea rows="8" name="instructions" placeholder="Dietary restrictions/special requests"></textarea>
									</div>
									<div class="col span_2_of_2">
										<input type="submit" value="Place Order" />
									</div>
								</form>
							</div>
						</div>
						<div id="menu-img">
							<img src="../images/menucroissant.jpg" alt="menu item" width="200" height="200">
							<img src="../images/panini.jpg" alt="menu item" width="200" height="200">
							<img src="../images/cookie.jpg" alt="menu item" width="200" height="200">
							<img src="../images/latte2.jpg" alt="menu item" width="200" height="200">
							<img src="../images/menudrink.jpg" alt="menu item" width="200" height="200">
							<img src="../images/latte1.jpg" alt="menu item" width="200" height="200">
							<img src="../images/latte3.jpg" alt="menu item" width="200" height="200">
						</div>
					</div>
				</main>

				<footer>
					<div id="contact">
						<div id="mobile-social">
							<a href="https://www.facebook.com/BoulevardCoffeeRoasting" target="_blank"><img src="../images/mobilefb.png" height="30" width="30" alt="facebook"></a>
							<a href="https://twitter.com/blvdroastingco" target="_blank"><img src="../images/mobiletwitter.png" height="30" width="30" alt="twitter"></a>
							<a href="https://www.instagram.com/explore/locations/236693420/" target="_blank"><img src="../images/mobileinsta.png" height="30" width="30" alt="instagram"></a>
						</div>
						<div id="address">
							<p>The Boulevard Coffee Roasting Co.</p>
							<p>5970 University Boulevard</p>
							<p>Vancouver, British Columbia</p>
							<p>Canada V6T 1Z3</p>
							<p>Telephone: 604.827.4488</p>
							<p>Email: info@theboulevard.ca</p>
						</div>
						<div id="sitemap-link">
							<br>
							<p><a href="sitemap.php">Site Map</a></p>
						</div>
					</div>
					
					<div id="hours">
						<table>
							<tr>
								<td>Monday</td>
								<td>7am - 7pm</td>
								<td>Friday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Tuesday</td>
								<td>7am - 7pm</td>
								<td>Saturday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Wednesday</td>
								<td>7am - 7pm</td>
								<td>Sunday</td>
								<td>8am - 6pm</td>
							</tr>
							<tr>
								<td>Thursday</td>
								<td>7am - 7pm</td>
								<td></td><td></td>
							</tr>
						</table>
					</div>
					
					<div id="mobile-hours">
						<table>
							<tr>
								<td>Monday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Tuesday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Wednesday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Thursday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Friday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Saturday</td>
								<td>7am - 7pm</td>
							</tr>
							<tr>
								<td>Sunday</td>
								<td>8am - 6pm</td>
							</tr>
						</table>
					</div>
				
					<div id="sitemap">
						<table>
							<tr>
								<td><a href="index.php">Home</a></td>
								<td><a href="gallery.php">Art</a></td>
							</tr>
							<tr>
								<td><a href="about.php">About</a></td>
								<td><a href="contact.php">Contact</a></td>
							</tr>
							<tr>
								<td><a href="menu.php">Menu</a></td>
								<td><a href="sitemap.php">Site Map</a></td>
							</tr>
						</table>
					</div>
				</footer>
			</div>
		</div>
	</div>
	<script src="../javascript/order-validation.js"></script>
</body>
</html>