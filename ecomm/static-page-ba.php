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

	<div class="census">
		<div class="select-district">
			<div class="label">Choose district and select members you would like to register:</div>
			<select class="board" onchange="onSelectChange(this.value)">
				<option value="000000191376">South Hunterdon Regional School District</option>
				<option value="000000825447">MSU District</option>
				<option value="000000846503">BMU District</option>
			</select>
		</div>

		<div class="board-management-box">
			<div class="text">Before registering, please check your district census report for accuracy. To access your census report, log in to the NJSBA website through the link in the upper right hand corner, click on �My Account,� and then �Board Management.�</div>
			<a href="https://members.njsba.org/CSM/MyProfileRoster.aspx"><button class="board-management">Board Management</button></a>
		</div>


		<div class="roster">
			<div class="roster-header">
				<div class="full-name">Full Name</div>
				<div class="position">Position</div>
				<div class="select">Select</div>
			</div>
			<div class="all-person">
				<div class="person">
					<div class="full-name">Aditi Bansal</div>
					<div class="position">Member</div>
					<div class="select" onclick="onSelect('000000846497')"><i class="fa fa-square-o"></i></div>
				</div> 
				<div class="person">
					<div class="full-name">Adriana DiGiacomantonio</div>
					<div class="position">Director of Corriculum</div>
					<div class="select" onclick="onSelect('000000045981')"><i class="fa fa-square-o"></i></div>
				</div> 
				<div class="person">
					<div class="full-name">Aravinda Tota</div>
					<div class="position">Member</div>
					<div class="select" onclick="onSelect('000000845398')"><i class="fa fa-square-o"></i></div>
				</div> 
				<div class="person">
					<div class="full-name">Brian Green</div>
					<div class="position">Member</div>
					<div class="select" onclick="onSelect('000000837794')"><i class="fa fa-square-o"></i></div>
				</div> 
				<div class="person">
					<div class="full-name">Chengping Chang</div>
					<div class="position">Secretary to the Business Administrator</div>
					<div class="select" onclick="onSelect('000000843780')"><i class="fa fa-square-o"></i></div>
				</div> 
				<div class="person">
					<div class="full-name">Denise Mazzucca</div>
					<div class="position">Member</div>
					<div class="registered">Registered</div>
				</div> 
				<div class="person">
					<div class="full-name">Gustavo Cardona</div>
					<div class="position">Member</div>
					<div class="registered">Registered</div>
				</div> 
				<div class="person">
					<div class="full-name">Joseph Hsieh</div>
					<div class="position">Business Administrator</div>
					<div class="select" onclick="onSelect('000000837074')"><i class="fa fa-square-o"></i></div>
				</div> 
				<div class="person">
					<div class="full-name">Kristen Krulikowski</div>
					<div class="position">Member</div>
					<div class="select" onclick="onSelect('000000839875')"><i class="fa fa-check-square-o"></i></div>
				</div> 
				<div class="person">
					<div class="full-name">Louis Schimenti</div>
					<div class="position">Member</div>
					<div class="select" onclick="onSelect('000000809114')"><i class="fa fa-check-square-o"></i></div>
				</div> 
				<div class="person">
					<div class="full-name">Paul Field</div>
					<div class="position">Member</div>
					<div class="select" onclick="onSelect('000000826729')"><i class="fa fa-square-o"></i></div>
				</div> 
				<div class="person">
					<div class="full-name">Rajat Giri</div>
					<div class="position">IT Director</div>
					<div class="select" onclick="onSelect('000000837745')"><i class="fa fa-square-o"></i></div>
				</div> 
				<div class="person">
					<div class="full-name">Ryan Murphy</div>
					<div class="position">Board Attorney</div>
					<div class="registered">Registered</div>
				</div> 
				<div class="person">
					<div class="full-name">Stacy Pezzola</div>
					<div class="position">Business Administrator</div>
					<div class="select" onclick="onSelect('000000813016')"><i class="fa fa-square-o"></i></div>
				</div> 
				<div class="person">
					<div class="full-name">Test Testing</div>
					<div class="position">Member</div>
					<div class="select" onclick="onSelect('000000842913')"><i class="fa fa-square-o"></i></div>
				</div> 
			</div>
		</div>
	</div>
	
	<div class="registration">
		<h2>Registration</h2>
		<div class="selected-attendees">
			<div class="label">Selected 2 attendee(s)</div>
			<div class="text">Kristen Krulikowski</div>
			<div class="text">Louis Schimenti</div>
		</div>    
		<div class="total-price">
			<div class="label">Total Price:</div>
			<div class="text">$ 198.00</div>
		</div>    

		<form action="/njsba/mr_poc/svc/Service/Complete" enctype="multipart/form-data" method="post">
			<div class="enter-po-number">Enter PO Number (required):</div>
			<input type="text" name="textline" size="30">
			<div class="select-po-file">Select a PO file to upload (must be a PDF file):</div>
			<input class="custom-file-input" placeholder="No file selected"  type="file" name="datafile" accept="application/pdf">
			<div class="submit"> 
				<input type="submit" value="Submit"> 
			</div>
		</form>
	</div>    

	<div class="registration hidden">
		<div class="title">Registration</div>
		<div class="title">Review the following information carefully before clicking the submit button</div>
		<div class="meeting-box">
			<div class="meeting">Meeting:</div>
			<div class="text">Governance I: New Board Member Orientation</div>
		</div>
		<div class="date-box">
			<div class="date">Date:</div>
			<div class="text">October 23, 2017</div>
		</div>
		<div class="time-box">
			<div class="time">Time:</div>
			<div class="text">1:00 PM</div>
		</div>
		<div class="location-box">
			<div class="location">Location:</div>
			<div class="text">AC Convention Center</div>
		</div>
		<div class="attendee-box">
			<div class="attendee">Attendee:</div>
			<div class="text">Gustavo Cardona</div>
		</div>
		<div class="company-box">
			<div class="company">Company:</div>
			<div class="text">New Jersey School Boards Association</div>
		</div>
		<div class="title-box">
			<div class="title">Title:</div>
			<div class="text">Web Developer</div>
		</div>
		<div class="button-box">
			<div class="label">Click Submit button to complete process</div>
			<div class="button" onclick="onClickSubmit()">Submit</div>
		</div>
	</div>

	<div class="registration hidden">
		<div class="title">Registration</div>
		<div class="title">You have already registered for this meeting. Please review your registration.</div>
		<div class="meeting-box">
			<div class="meeting">Meeting:</div>
			<div class="text">Governance I: New Board Member Orientation</div>
		</div>
		<div class="date-box">
			<div class="date">Date:</div>
			<div class="text">October 23, 2017</div>
		</div>
		<div class="time-box">
			<div class="time">Time:</div>
			<div class="text">1:00 PM</div>
		</div>
		<div class="location-box">
			<div class="location">Location:</div>
			<div class="text">AC Convention Center</div>
		</div>
		<div class="attendee-box">
			<div class="attendee">Attendee:</div>
			<div class="text">Denise Mazzucca</div>
		</div>
		<div class="company-box">
			<div class="company">Company:</div>
			<div class="text">New Jersey School Boards Association</div>
		</div>
		<div class="title-box">
			<div class="title">Title:</div>
			<div class="text">Assistant to Executive Officer</div>
		</div>
		<div class="button-box">
			<div class="label">Click Acknowledge button when done</div>
			<div class="button" onclick="onClickAcknowledge()">Acknowledge</div>
		</div>
	</div>

	<div class="registration hidden">
		<div class="title">Registration</div>
		<div class="title">Review the following information carefully before clicking the acknowledge button</div>
		<div class="meeting-box">
			<div class="meeting">Meeting:</div>
			<div class="text">NJSBA School Security & Student Safety Conference</div>
		</div>
		<div class="date-box">
			<div class="date">Date:</div>
			<div class="text">June 6, 2017</div>
		</div>
		<div class="time-box">
			<div class="time">Time:</div>
			<div class="text">9:30 AM</div>
		</div>
		<div class="location-box">
			<div class="location">Location:</div>
			<div class="text">The Conference Center At Mercer</div>
		</div>
		<div class="member-price-box">
			<div class="member-price">Member Price:</div>
			<div class="text">$ 99.00</div>
		</div>
		<div class="button-box">
			<div class="label">Please contact Business Administrator to complete registration for you</div>
			<div class="button" onclick="onClickAcknowledge()">Acknowledge</div>
		</div>
	</div>


	<div class="registration hidden">
		<div class="title">Registration</div>
		<div class="title">Review the following information carefully before entering credit card payment</div>
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
			<div class="title">Title:</div>
			<div class="text">Sales Manager</div>
		</div>

		<form action="payment" id="payment-form">
			<div class="instruction">Enter Billing Address</div>
			<div class="first-name">First name:</div>
			<input type="text" name="firstname">
			<div class="last-name">Last name:</div>
			<input type="text" name="lastname">
			<div class="company">Company:</div>
			<input type="text" name="company">
			<div class="address">Address:</div>
			<input type="text" name="address1">
			<input type="text" name="address2">
			<div class="city">City:</div>
			<input type="text" name="city">
			<div class="zip-code">Zip Code:</div>
			<input type="text" name="zip">
			<div class="state">State:</div>
			<input type="text" name="state">
			<div class="contact-phone">Contact Phone Number:</div>
			<input type="text" name="phone">
			<div class="contact-email">Contact Email Address:</div>
			<input type="text" name="email1">
			<div class="contact-email">(again) Email Address:</div>
			<input type="text" name="email2">     
			<div class="creditcard-instruction">Enter Credit Card Information</div>
			<div class="creditcard-number">Credit Card Number:</div>
			<input type="text" name="credit1">
			<div class="creditcard-code">Security Code:</div>
			<input type="text" name="credit2">
			<div class="creditcard-date">Expiration Date:</div>
			<input type="text" name="expiration">  
			<div class="creditcard-name">Name on the Card:</div>
			<input type="text" name="owner">  
		</form>    

		<div class="button-box">
			<div class="label">Click Submit button to complete process</div>
			<div class="button" onclick="onSubmitPayment()">Submit</div>
		</div>
	</div>    
	</div>	
<?php include('footer.php'); ?>
        
