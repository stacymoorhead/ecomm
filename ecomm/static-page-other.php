<?php include('header.php'); ?>
	<div class="page-header">
		<h1>Registration</h1>
	</div>
	<div class="container">
		<div class="product-detail">
			<h2>Meeting Details</h2>	
			<div class="featured-image">
					<img src="images/product.png"/>
				</div>
				<div class="details">
					<div class="product-text">
						<div class="title">Governance I: New Board Member Orientation</div>
						<div class="when-box">
							<div class="when">When:</div>
							<div class="text">October 23, 2017</div>
						</div>
						<div class="where-box">
							<div class="where">Where:</div>
							<div class="text">AC Convention Center</div>
							<div class="address">One Convention Blvd, Atlantic City, NJ 08401</div>
						</div>

						<div class="county-box">
							<div class="county">County:</div>
							<div class="text">Atlantic County</div>
						</div>
						<div class="location-box">
							<div class="location">Location:</div>
							<div class="google-map"><a href="https://www.google.com/maps/place/Atlantic+City+Convention+Center/@39.3819815,-74.4778136,13z/data=!4m12!1m6!3m5!1s0x89c0ef367d596247:0x83b1bed41f167bf5!2satlantic+city+convention+center!8m2!3d39.4034728!4d-74.4929198!3m4!1s0x0:0x804ed2f224a1a89a!8m2!3d39.3631033!4d-74.4385529"><i class="fa fa-map-marker"></i> Map</a>
							</div>
						</div>
						<div class="time-box">
							<div class="time">Time:</div>
							<div  class="text">1:00 PM - 5:17 PM</div>
						</div>
						<div class="dinner-box">
							<div class="dinner">Dinner:</div>
							<div class="text">dinner at 6:00 PM</div>
						</div>
						<div class="description-box">
							<div class="description">Description</div>
							<div class="text">Governance I: New Board Member Orientation</div>
						</div>
						<div class="member-price-box">
							<div class="member-price">Member Price:</div>
							<div class="text">$ 0.00</div>
						</div>
						<div class="list-price-box">
							<div class="list-price">List Price:</div>
							<div class="text">$ 250.00</div>
						</div>    
					</div>
			</div>		
		</div>


		<div class="registration-other">
			<h2>Registration</h2>
			<div class="label">Review the following information carefully before entering credit card payment:</div>
			<div class="meeting-box">
				<div class="meeting">Meeting:</div>
				<div class="text">Bergen County SBA Meeting</div>
			</div>
			<div class="date-box">
				<div class="date">Date:</div>
				<div class="text">May 31, 2017</div>
			</div>
			<div class="time-box">
				<div class="time">Time:</div>
				<div class="text">6:00 PM</div>
			</div>
			<div class="location-box">
				<div class="location">Location:</div>
				<div class="text">Holiday Inn</div>
			</div>
			<div class="attendee-box">
				<div class="attendee">Attendee:</div>
				<div class="text">Michele Bucci</div>
			</div>
			<div class="company-box">
				<div class="company">Company:</div>
				<div class="text">No Name Just A Made Up Company</div>
			</div>
			<div class="title-box">
				<div class="job-title">Title:</div>
				<div class="text">Sales Manager</div>
			</div>
		</div>	

		<div class="payment">
			<form class="creditcard-form" action="payment" id="payment-form">
				<h2 class="instruction">Enter Billing Address</h2>
				<div class="grid">
					<div class=" unit half">
						<div class="first-name">First name:</div>
						<input type="text" name="firstname">
					</div>	
					<div class="unit half">
						<div class="last-name">Last name:</div>
						<input type="text" name="lastname">
					</div>	
				</div>	
				<div class="grid">
					<div class="unit whole">
						<div class="company">Company:</div>
						<input type="text" name="company">
					</div>
				</div>	
				<div class="grid">
					<div class="unit half">	
						<div class="billing-address">Address:</div>
						<input type="text" name="address1">
					</div>	
					<div class="unit half">		
						<div class="billing-address">Address Line 2:</div>
						<input type="text" name="address2">
					</div>	
				</div>	
				<div class="grid">
					<div class="unit half">
						<div class="city">City:</div>
						<input type="text" name="city">
					</div>
					<div class="unit one-quarter">	
						<div class="zip-code">Zip Code:</div>
						<input type="text" name="zip">
					</div>	
					<div class="unit one-quarter">
						<div class="state">State:</div>
						<input type="text" name="state">
					</div>	
				</div>	
				<div class="grid">	
					<div class="unit one-third">
						<div class="contact-phone">Contact Phone:</div>
						<input type="text" name="phone">
					</div>
					<div class="unit one-third">
						<div class="contact-email">Contact Email:</div>
						<input type="text" name="email1">
					</div>
					<div class="unit one-third">	
						<div class="contact-email">Confirm Email:</div>
						<input type="text" name="email2">  
					</div>	   
				</div>			
				<h2 class="creditcard-instruction">Enter Credit Card Information</h2>
				<div class="grid">	
					<div class="unit one-quarter">
						<div class="creditcard-number">Credit Card Number:</div>
						<input type="text" name="credit1">
					</div>
					<div class="unit one-quarter">	
						<div class="creditcard-code">Security Code:</div>
						<input type="text" name="credit2">
					</div>
					<div class="unit one-quarter">		
						<div class="creditcard-date">Expiration Date:</div>
						<input type="text" name="expiration"> 
					</div>	
					<div class="unit one-quarter">
						<div class="creditcard-name">Name on the Card:</div>
						<input type="text" name="owner">  
					</div>
				</div>	
				<div class="grid">
					<div class="unit whole button-box">
						<div class="label">Click Submit button to complete process.</div>
						<div class="submit"> 			
							<input type="submit" value="Submit"> 
						</div>		
					</div>
				</div>	
			</form> 	
			<div class="addresses">
				<div class="verify-address">
					<h2>Billing Address</h2>
					<div class="text">
						<div class="label">Please verify your billing address:</div>
						<p><strong>Stacy Moorhead</strong> <br>
							Graphic Design Specialist <br>
							New Jersey School Boards Association <br>
							413 West State St.<br>
							Trenton, NJ 08618
						</p>	
					</div>
				</div>
				<div class="shipping-address">	
					<h2>Shipping Address</h2>	
					<div class="text">
						<div class="label">
							<input type="checkbox" id="multi-address" name="multi-address" value="multi-address">
    						<label class="multi-address" for="multi-address">Ship to multiple addresses</label></div>
						<p><strong>Stacy Moorhead</strong> <br>
							Graphic Design Specialist <br>
							New Jersey School Boards Association <br>
							413 West State St.<br>
							Trenton, NJ 08618
						</p>	
					</div>
				</div>	
			</div>	 
			   
		</div>   
	</div>	

<?php include('footer.php'); ?>
        
