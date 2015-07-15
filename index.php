<?php

	$title = "Tori Bowman - Artist!";
	$titleClass = "Art For Your Space<br>by";
	$h1Title = "Tori Bowman";
	$pageName = "index.php";
	
	include ('./includes/mainHeader.html');
	//include ('./includes/pic_content.html');

?>
	<div class="navRow">
		<div id="navRow" class="row">
			<div class="medium-2 large-2 hide-for-small column">
				<span class="selected">
					<div id="pic1">
						<img class="selected" height="200" width="135" src="img/smSquidGirl.png" />
						<h2 class="linkStyleSel">Home</h2>
					</div>
				</span>
			</div>
			<div class="medium-2 large-2 hide-for-small column">
				<a href="/about/" title="About Page!">
    				<div id="pic2" class="imgNav">
        				<h2 class="linkStyleSel">About</h2>
        			</div>
    			</a>
			</div>
			<div class="medium-2 large-2 hide-for-small column">
				<a href="/gallery/" title="Gallery Page!">
					<div id="pic3" class="imgNav">
						<h2 class="linkStyle">Gallery</h2>
					</div>
				</a>
			</div>
			<div class="medium-2 large-2 hide-for-small column">
				<a href="/shop/" title="Shop Page!">
					<div id="pic4" class="imgNav">
						<h2 class="linkStyle">Shop</h2>
					</div>
				</a>
			</div>
			<div class="medium-2 large-2 hide-for-small column">
				<a href="/commission/" title="Commission Page!">
					<div id="pic5" class="imgNav">
						<h2 class="linkStyle">Commission</h2>
					</div>
				</a>
			</div>
			<div class="medium-2 large-2 hide-for-small column">
				<a href="/contact/" title="Contact Page!">
					<div id="pic6" class="imgNav">
						<h2 class="linkStyle">Contact</h2>
					</div>
				</a>
			</div>




		</div><!-- End of row -->
	</div><!-- end of navRow -->
	
	<div class="navRowBottom"></div>
	
    <div class="primary-content">
		
        <div class="row">
        	
            <div class="large-8 medium-7 small-12 column homePic">
                
                <p>Greetings!</p>
                
                <p>Welcome to my space on the web. Have fun exploring my artwork, submitting for a commission or 
                purchasing an image.</p>
                
                <p>If you have something in mind, and would like to see your idea come to 
                life, I can help.</p>
                
                <p>Please contact me if you have any questions or need assistance in giving 
                your vision life!</p>
                
                <div class="row">
            		<div class="large-12 hide-for-small column">                
                		<p><img src="img/signature.png" width="88" height="51" alt="Tori Bowman's Signature" align="left"></p>
                	</div>
         		</div>
                
        	</div>
            
            <div class="large-4 medium-5 column">
                <img data-interchange="[/img/mdToriPic.jpg, (default)], [/img/lgToriPic.jpg, (large)]" class="radius">
				<noscript><img src="/img/lgToriPic.jpg" alt="Picture of Tori Bowman"></noscript>
            </div>
            
      	</div> <!-- End of row -->

    </div> <!-- End of primary-content -->
    
<?php

	include ('./includes/mainFooter.html');

?>
        
