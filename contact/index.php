<?php

	$title = "Tori Bowman - Artist - Contact Page";
	$titleClass = 'Contact Information';
	$h1Title = "Tori Bowman";
	$pageName = "contact";
	
	include ('../includes/mainHeader.html');
	//include ('../includes/pic_content.html');

	//check for form submission
	if(isset($_POST["submit_contact"])) {	
		
		// Turns Guest's informaton into easy to use format
		$email = ($_POST['email']);
		$firstName = ($_POST['firstName']);
		$lastName = ($_POST['lastName']);
		$comments = ($_POST['comments']);
		$name = $firstName . " " . $lastName;
			
		//Body of email
		$body = "\n\nThank you for your questions / comments. I will get back with you as soon as possible.
		\nHave a wonderful day!
		\nTori Bowman";
	
		// Email Guest
		mail ("$name <$email>", 'Tori Bowman\'s Comment Form', $body, 'From: Tori Bowman <vmbowman95@gmail.com>');
		
		// Body of Email sent to June Bowman
		$results = "Comments / Questions\n\nName is: $name\n\nEmail address is: $email\n\nQuestions / Comments are: $comments";
					
		// email June Bowman
		mail ("June Bowman <june@junebowman.com>", "Questions / Comments", $results, "From: $name <$email>");
		
	?>
		
		<div class="primary-content">
		
			<div class="row">
				<div align="center" class="medium-3 large-3 column">
					<p>&nbsp;</p>
				</div>
				
				<div align="center" class="medium-6 large-6 column">
					<p align="left">
						Thank you for submitting your questions / comments. <i class="fi-heart" id="title6"></i>
					</p>
					<p align="left">
						I will be in contact with you as soon as possible.
					</p>
					</p>
					<p align="left">
						Don't forget you can follow me on <a href="http://tapastic.com/series/Paperback-Trade" target="_blank">
						Tapastic - Paperback Trade!</a>
					</p>
				</div>
				
				<div align="center" class="medium-3 large-3 column">
					<p>&nbsp;</p>
				</div>
	
			</div>
			
		</div><!-- End of primary content  -->
				
	<?php
	} else {
	?>	
	<div class="primary-content">
		            
        <div class="row">
			<div class="show-for-small-only column"><p>&nbsp;</p></div>
        	
			<div align="center" class="small-12 medium-6 large-6 column">
				<a href="#" data-reveal-id="myModal"><i class="fi-mail" id="title5"></i></a>
                <p align="left">
					If you would like to commission a drawing, need help fleshing out an idea or have any 
        			questions, please fill out the contact form and I'll be happy to assist you.
     			</p>
         	</div>
			
			<div class="show-for-small-only column"><p>&nbsp;</p></div>

            <div align="center" class="medium-6 large-6 hide-for-small column">
            	<p align="left">Follow me on <a href="http://tapastic.com/series/Paperback-Trade" target="_blank">Tapastic - 
                	Paperback Trade!</a> Let me know your ideas. I'll do my best to make them come to life.</p>
				<a href="#" data-reveal-id="myModal" class="radius button">Contact Form</a>
         	</div>
		
		</div><!-- close row div  -->
		
		<div id="myModal" class="reveal-modal contactForm" data-reveal 
			aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  			<h2 id="modalTitle">Contact Form</h2>
  			<p class="lead contactLead">
				Please enter any questions / comments you may have below. 
  				Please include your contact information and I will respond as soon as possible.
			</p>
			<br>
  
			<form method="post" action="index.php">
				<div class="row">
					<div class="large-4 columns">
						<label for"fname">First Name
							<input type="text" id="fname" name="firstName" placeholder="First Name" 
								value="<?php if (isset($_POST['firstName'])) echo stripslashes($_POST['firstName']); ?>" />
						</label>
					</div>
					
					<div class="large-4 columns">
						<label for"lname">Last Name
							<input type="text" id="lname" name="lastName" placeholder="Last Name" 
								value="<?php if (isset($_POST['lastName'])) echo stripslashes($_POST['lastName']); ?>" />
						</label>
					</div>
					
					<div class="large-4 columns">
						<label for"email">Email
							<input type="text" id="email" name="email" placeholder="Email Address" 
								value="<?php if (isset($_POST['email'])) echo stripslashes($_POST['email']); ?>" />
						</label>
					</div>
					
				</div><!-- End of row div  -->
			  
				<div class="row">
					<div align="center" class="large-12 columns">
						<label for"comments">Questions / Comments:
							<textarea id="comments" name="comments" placeholder="Questions / Comments"></textarea>
						</label>
					</div>
				</div>
			
				<div class="row">
					<div align="center" class="large-12 columns">
						<input type="submit" name="submit_contact" value="Submit">
					</div>
				</div>
			
			</form>

  			<a class="close-reveal-modal" aria-label="Close">&#215;</a>

		</div><!-- End of myModal div -->
              
	</div> <!-- End of primary-content -->
	
	<?php
	};// End of is isset
			
	include ('../includes/mainFooter.html');
	
	?>
