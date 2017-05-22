
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