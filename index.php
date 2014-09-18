<?php require( $_SERVER['DOCUMENT_ROOT'] . '/inc/config.php'); ?>
<?php include( HEADER ); ?>
<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!-- header -->
		<header class="header">
			<div class="shell">

<?php include( VIEW_NAV ); ?>

				<div class="slider">
					<div id="bg"></div>
					<div id="carousel">

						<div>
							<h5>Get total</h5>
							<h3>Control</h3>
							<p>The modern irrigation control center combines conservation, flexibility and ease of use. Every project includes the latest industry standard irrigation controllers.</p>
							<!-- <a href="#" class="green-btn">FREE Quote</a> -->
							<img class="img-back" src="/images/controller.png" alt="dot3" width="357" height="312" />
						</div>
						<div>
							<h5>It all starts with</h5>
							<h3>Water</h3>
							<p>Keeping your lawn properly irrigated is the single most important aspect for a healthy and attractive landscape. Give your grass everything it needs to grow strong all season long.</p>
							<!-- <a href="#" class="green-btn">FREE Quote</a> -->
							<img class="img-mid" src="/images/sprinkler-heads.png" alt="dot2" width="362" height="600" />
						</div>
						<div>
							<h5>Rest Assured</h5>
							<h3>Value</h3>
							<p>Low mainenace and piece of mind. Nothing but the best components for the each and every profecionally designed irrigation system.</p>
							<!-- <a href="#" class="green-btn">FREE Quote</a> -->
							<img class="img-front" src="/images/valve.png" alt="dot1" width="237" height="508" />
						</div>
<!--
						<div>
							<h5>Improve your lawn</h5>
							<h3>Spring Promo </h3>
							<p>Start your new year on the right path. Combine your spring irrigation tune-up with <b>wed prevention</b> and <strong>fertilization</strong>. All without lifting a finger.</p>
							<a href="springpromo/" class="green-btn">View Promotion</a>
							<!-- <img class="img-front" src="css/images/XX-front-img.png" alt="dot1" width="263" height="436" />
							<img class="img-mid" src="css/images/XX-img-mid.png" alt="dot2" width="230" height="363" />
							<img class="img-back" src="css/images/XX-img-back.png" alt="dot3" width="195" height="304" />
						</div>
-->
					</div>
					<div class="pagination"></div>
					<a id="prev" href="#"></a>
					<a id="next" href="#"></a>
				</div>
			</div>
		</header>
		<!-- end of header -->
		<!-- shell -->
		<div class="shell">
			<!-- main -->
			<div class="main">
				<!-- cols -->

				<section class="partners">
					
					<div id="partners-slider">
					  	<div class="slider-holder2">
						    <img src="/images/hunter-logo.jpg" alt="Hunter Irrigation Products" width="216" height="52" />
						    <img src="/images/rain-bird-logo.jpg" alt="Rain Bird Irrigation" width="236" height="52" />
						    <img src="/images/john-deere-logo.jpg" alt="John Deere Landscape Products" width="193" height="52" />
						    <img src="/images/toro-logo.jpg" alt="Toro Irrigarion Products" width="192" height="52" />
						    <img src="/images/central-logo.jpg" alt="turf and irigation supplies" width="252" height="52" />
						</div>
					</div>
					<div class="slider-arr">
						<a class="prev-arr arr-btn" href="#"></a>
						<a class="next-arr arr-btn" href="#"></a>
					</div>
				</section>

				<section class="cols">

					<div class="col">
						<img src="css/images/col-img1.png" alt="" />
						<div class="col-cnt">
							<h2>PLANNING</h2>
							<p>Starting from an idea, we work to find the best solution for <em>you AND your lawn</em>. Every location is different and deserves the extra attention.</p>
							<a href="#" class="more">view more</a>
						</div>
					</div>
					<div class="col">
						<img src="css/images/col-img2.png" alt="" />
						<div class="col-cnt">
							<h2>INSTALLATION</h2>
							<p>Quality products and experienced installers that keep things on schedule. </p>
							<a href="#" class="more">view more</a>
						</div>
					</div>
					<div class="col">
						<img src="css/images/col-img3.png" alt="" />
						<div class="col-cnt">
							<h2>RELAX</h2>
							<p>Spend more time enjoying your lawn and less time on maintenance.  </p>
							<a href="#" class="more">view more</a>
						</div>
					</div>
					<div class="cl">&nbsp;</div>

				</section>
				<!-- end of cols -->
				<section class="post">
					<img src="images/sprinkler.jpg" alt="Installed sprinkler head" />
					<div class="post-cnt">
						<h2>Yes, lawn irrigation is the logical choice</h2>
						<p>
							<strong>A professionally installed automatic lawn sprinkler system is one of the best investments that you can make for your home.</strong><br/> Just ask anyone who has one. There is no easier or more cost-effective way to beautify your home, increase its value, and save yourself a lot of time and money.						
						</p>

						<ul>
							<li><a href="#">Low Maintenance Costs</a></li>
							<li><a href="#">Conserve Water</a></li>
							<li><a href="#">Save Time</a></li>
							<li><a href="#">Long Term Attractive Landscaping</a></li>
						</ul>
					</div>
					<div class="cl">&nbsp;</div>
				</section>

				<section class="content">
					<h2>WHO WE ARE</h2>
					<p>Midwest Irrigation is a division of <a href="http://www.jaguschlawncare.com">Jagusch Lawn Care</a>. A trusted name in law service for over 10 years. We operate in <em>North Branch Minnesota</em>, <em>New Richmond Wisconsin</em> and <em>Forest Lake Minnesota</em> with a wide variety of year-round professional services. For more information...</p>
				</section>


				<!-- <div class="socials">
					<p>We are currently <strong>available</strong> for work. Please, contact us for a quote at <span><a href="#">contact [at] websitename [dot] com</a></span></p>

					<ul>
						<li><a href="#" class="facebook-ico">facebook-ico</a></li>
						<li><a href="#" class="twitter-ico">twitter-ico</a></li>
						<li><a href="#" class="skype-ico">skype-ico</a></li>
						<li><a href="#" class="rss-ico">rss-ico</a></li>
					</ul>
				</div> -->
			</div>
			<!-- end of main -->
		</div>
		<!-- end of shell -->	
<?php 
include( VIEW_FOOTER );
include( VIEW_COMMONJS );
?>
<!-- add page + JS -->
	</div> 	<!-- end of wrapper -->
</body>

</html>