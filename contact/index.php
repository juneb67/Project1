<?php

	$title = "Tori Bowman - Artist - Contact Page";
	$titleClass = 'Contact Information';
	$h1Title = "Tori Bowman";
	$pageName = "contact";
	
	include ('../includes/mainHeader.html');
	//include ('../includes/pic_content.html');

?>
        
	<div class="primary-content">
            
        <div class="row">
        	<div align="center" class="medium-6 large-6 column">
				<a href="#" data-reveal-id="myModal"><i class="fi-mail" id="title5"></i></a>
                <p align="left">
					If you would like to commision a drawing, need help fleshing out an idea or have any 
        			questions, please fill out the contact form and I'll be happy to assist you.
     			</p>

         	</div>
        	
            <div align="center" class="medium-6 large-6 column">
            	<p>Follow me on <a href="http://tapastic.com/series/Paperback-Trade" target="_blank">Tapastic - Paperback Trade!</a> Let me know your ideas. I'll do my best to make them come to life.</p>
				<a href="#" data-reveal-id="myModal" class="radius button">Contact Form</a>
         	</div>
		</div><!-- close row div  -->


<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  
<form>
  <div class="row">
    <div class="large-12 columns">
      <label>Input Label
        <input type="text" placeholder="large-12.columns" />
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-4 columns">
      <label>Input Label
        <input type="text" placeholder="large-4.columns" />
      </label>
    </div>
    <div class="large-4 columns">
      <label>Input Label
        <input type="text" placeholder="large-4.columns" />
      </label>
    </div>
    <div class="large-4 columns">
      <div class="row collapse">
        <label>Input Label</label>
        <div class="small-9 columns">
          <input type="text" placeholder="small-9.columns" />
        </div>
        <div class="small-3 columns">
          <span class="postfix">.com</span>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <label>Select Box
        <select>
          <option value="husker">Husker</option>
          <option value="starbuck">Starbuck</option>
          <option value="hotdog">Hot Dog</option>
          <option value="apollo">Apollo</option>
        </select>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label>Choose Your Favorite</label>
      <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
    </div>
    <div class="large-6 columns">
      <label>Check these out</label>
      <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
      <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <label>Textarea Label
        <textarea placeholder="small-12.columns"></textarea>
      </label>
    </div>
  </div>
</form>  
  
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>            


            
            
            
            
              
		</div> <!-- End of primary-content -->

<?php
	include ('../includes/mainFooter.html');
?>
