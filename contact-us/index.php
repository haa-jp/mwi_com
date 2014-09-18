<?php require( $_SERVER['DOCUMENT_ROOT'] . '/inc/config.php'); ?>
<?php include( HEADER ); ?>
<body>
	<!-- wrapper -->
	<div class="wrapper">
		<header class="header"> 
			<div class="shell">

<?php include( VIEW_NAV ); ?>

<!-- removed slider div(s) -->

			</div> <!-- end shell -->
</header> <!-- end of header -->
	<div class="shell">
		
			<div class="main">
			
				<section class="content">
					<form method="post" action="/inc/system/mail_daemon.php">
						<fieldset>
							<h2> Contact us Today</h2>
							<p> 
								<label for="name">Name:</label>
								<input type="text" name="name" id="name" size="30" maxlength="100" required>
							</p>
							<p>
								<label for="email">Email:</label>
								<input type="email" name="email" id="email" size="30" maxlength="100" required>
							</p>
							<p>
								<label for="phone">Phone:</label>
								<input type="phone" name="phone" id="email" size="30" maxlength="100" required>
							</p>
							
						</fieldset>
						<fieldset data-visible-field="show">
							<p>
								<label for="address">Address:</label> 
    							<input type="text" name="address" id="address" size="30" maxlength="100" data-required-field="show" required>
  							</p>
							<p>
								<label for="city">City:</label> 
    							<input type="text" name="city" id="city" size="30" maxlength="100" data-required-field="show" required>
  							</p>
							<p>
								<label for="state">State:</label> 
    							<input type="text" name="state" id="state" size="30" maxlength="100" data-required-field="show" required>
  							</p>
							<p>
								<label for="zipcode">Zip Code:</label> 
    							<input type="text" name="zipcode" id="zipcode" size="30" maxlength="100" data-required-field="show" required>
  							</p>
						</fieldset>
						<fieldset class="submit">

							<p class="check"><input type="checkbox" name="show" id="show" value="show">
  								<label for="show">I would like to get an irrigation estimate.</label>
							</p>
							<p>
								<label for="notes">Notes:</label> 
								<textarea name="notes" id="notes" cols="40" rows="5" data-required-field="show"></textarea>
  							</p>
						
							<p><input type="submit" class="button default green-btn" value="Submit"></p>
						</fieldset>

					</form>
				</section>
			
			
			</div>
			
			<!-- end main -->
		</div>
		<!-- end chell -->
		

<?php 
include( VIEW_FOOTER );
include( VIEW_COMMONJS );
?>
<!-- add page + JS -->
<script src="/js/quaid.core-2.0.js"></script>
<script src="/js/quaid.forms-4.0.js"></script>
	</div>	<!-- end of wrapper -->
</body>

</html>
