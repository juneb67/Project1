<?php

	$title = "Tori Bowman - Artist - Gallery Page";
	$titleClass = 'Gallery of Art<br>by';
	$h1Title = "Tori Bowman";
	$pageName = "gallery";
	
	include ('../includes/mainHeader.html');
	include ('../includes/pic_content.html');

?>
            
	<h3 class="h3Center">Sample of Tori's Art</h3>
                
	<div class="primary-content">

		<div class="row">
        
        	<div align="center" class="large-12 column">
            	<p>Peruse artwork via video or look at all artwork at once in the form of images.</p>
            </div>
        
			<div align="center" class="large-6 show-for-large-up column">
      			<div class="row">
              		<div align="left" class="large-3 column">
                		<a href="#" data-reveal-id="myVid"><i class="fi-video" id="title1"></i></a>
          			</div>
                	<div align="left" class="large-9 column buttonRow">
                		<!-- Call the modal  -->
        				<a href="#" data-reveal-id="myVid" class="radius button">View Slideshow!</a>
        	   		</div>
				</div><!-- End of 2nd row div  -->
            </div><!-- End of column div  -->

			<div align="center" class="medium-6 hide-for-large-up show-for-medium-only column">
      			<div class="row">
              		<div align="left" class="medium-4 column">
                		<a href="#" data-reveal-id="myVid"><i class="fi-video" id="title1"></i></a>
          			</div>
                	<div align="right" class="medium-8 column buttonRow">
                		<!-- Call the modal  -->
        				<a href="#" data-reveal-id="myVid" class="radius button">View Slideshow!</a>
        	   		</div>
				</div><!-- End of 2nd row div  -->
            </div><!-- End of column div  -->

            <div align="center" class="reveal-modal xlarge artVideo" id="myVid" data-reveal="">
				<h2 class="artVideoTitle">Enjoy the Show!</h2>
                <iframe src="https://www.youtube.com/embed/CQT-O8xD_Nc" height="315" width="560" 
                	allowfullscreen="" frameborder="0">
            	</iframe>
 				<a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
		
			<div align="center" class="large-6 show-for-large-up column">
                <div class="row">
                	<div align="right" class="large-9 column buttonRow">
                        <a href="#" data-reveal-id="myModal2" class="radius button">View Images!</a>
             		</div>
                	<div align="left" class="large-3 column">
                        <a href="#" data-reveal-id="myModal2"><i class="fi-photo" id="title1"></i></a>
             		</div>
         		</div>
			</div><!-- End of column div  -->
			
            <div align="center" class="medium-6 show-for-medium-only column">
                <div class="row">
                	<div align="left" class="medium-8 column buttonRow">
                        <a href="#" data-reveal-id="myModal2" class="radius button">View Images!</a>
             		</div>
                	<div align="right" class="medium-4 column">
                        <a href="#" data-reveal-id="myModal2"><i class="fi-photo" id="title2"></i></a>
             		</div>
         		</div>
			</div><!-- End of column div  -->
        
            <!-- Beginning of modal window code  -->
            <div id="myModal2" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Art Samples!</h2>
                <div class="row artRow"><!-- set up row for all art work view  -->
                    <div class="large-12 hide-for-small column"><!-- hide for small column  -->
                        <div class="row"><!-- rows for picture modal window  -->
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal">
                                <img src="../img/lgFleur1.jpg" /></a></div>
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal2">
                                <img src="../img/lgFleur2.jpg" /></a></div>
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal3">
                                <img src="../img/lgGettingReady.jpg" /></a></div>
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal4">
                                <img src="../img/lgMelt.jpg" /></a></div>
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal5">
                                <img src="../img/lgMooning.jpg" /></a></div>
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal6">
                                <img src="../img/lgMotivation.jpg" /></a></div>
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal7">
                                <img src="../img/lgRoses.jpg" /></a></div>
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal8">
                                <img src="../img/lgRoses2.jpg" /></a></div>
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal9">
                                <img src="../img/lgSquidgirl.jpg" /></a></div>
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal10">
                                <img src="../img/lgYumE.jpg" /></a></div>
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal11">
                                <img src="../img/lgCall.jpg" /></a></div>
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal12">
                                <img src="../img/lgTheDate.jpg" /></a></div>
                            <div align="center" class="large-6 column allArt"><a href="#" data-reveal-id="secondModal13">
                                <img src="../img/lgBarrel.jpg" /></a></div>
                            
                            
                            
                            <div id="secondModal" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                              <h2 id="secondModalTitle">Fleur de lis - Version 1 - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                              </h2>
                              <div class="artRow"><!-- set up row for all art work view  -->
                                  <p align="center"><img src="../img/lgFleur1.jpg" width="320" height="400" /></p>
                                  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                              </div>
                            </div>
                            
                            
                            <div id="secondModal2" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                      			<h2 id="secondModalTitle">Fleur de lis - Version 2 - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                             	</h2>
                          		<div class="artRow"><!-- set up row for all art work view  -->
                              		<p align="center"><img src="../img/lgFleur2.jpg" width="320" height="400" /></p>
                              		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
                                </div>
                            </div>


                            <div id="secondModal3" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                              	<h2 id="secondModalTitle">Getting Ready To Go Out - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                              	</h2>
                          		<div class="artRow"><!-- set up row for all art work view  -->
                              		<p align="center"><img src="../img/lgGettingReady.jpg" width="298" height="400" /></p>
                              		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
                            	</div>
                            </div>
                            
                            <div id="secondModal4" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                              	<h2 id="secondModalTitle">Melting Attributes - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                              	</h2>
                        		<div class="artRow"><!-- set up row for all art work view  -->
                              		<p align="center"><img src="../img/lgMelt.jpg" width="266" height="400" /></p>
                              		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
                            	</div>
                            </div>
                            
                            <div id="secondModal5" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                              	<h2 id="secondModalTitle">Visiting the Moon - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                              	</h2>
                        		<div class="artRow"><!-- set up row for all art work view  -->
                              		<p align="center"><img src="../img/lgMooning.jpg" width="215" height="400" /></p>
                              		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
                            	</div>
                            </div>
                            
                            <div id="secondModal6" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                              	<h2 id="secondModalTitle">Finding Motivation - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                              	</h2>
                        		<div class="artRow"><!-- set up row for all art work view  -->
                              		<p align="center"><img src="../img/lgMotivation.jpg" width="300" height="400" /></p>
                              		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
                            	</div>
                            </div>
                            
                            <div id="secondModal7" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                              	<h2 id="secondModalTitle">Beautiful Woman With Roses In Her Hair - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                              	</h2>
                        		<div class="artRow"><!-- set up row for all art work view  -->
                              		<p align="center"><img src="../img/lgRoses.jpg" width="318" height="400" /></p>
                              		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
                             	</div>
                            </div>
                            
                            <div id="secondModal8" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                              	<h2 id="secondModalTitle">Roses! - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                              	</h2>
                        		<div class="artRow"><!-- set up row for all art work view  -->
                              		<p align="center"><img src="../img/lgRoses2.jpg" width="319" height="400" /></p>
                              		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
                           		</div>
                            </div>
                            
                            <div id="secondModal9" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                              	<h2 id="secondModalTitle">Squid Girl! - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                              	</h2>
                        		<div class="artRow"><!-- set up row for all art work view  -->
                              		<p align="center"><img src="../img/lgSquidgirl.jpg" width="267" height="400" /></p>
                              		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
                           		</div>
                            </div>
                            
                            <div id="secondModal10" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                              	<h2 id="secondModalTitle">Big Mouth! - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                              	</h2>
                        		<div class="artRow"><!-- set up row for all art work view  -->
                              		<p align="center"><img src="../img/lgYumE.jpg" width="300" height="400" /></p>
                              		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
                           		</div>
                            </div>
                            
                            <div id="secondModal11" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                              	<h2 id="secondModalTitle">Intruder Call! - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                              	</h2>
                        		<div class="artRow"><!-- set up row for all art work view  -->
                              		<p align="center"><img src="../img/lgCall.jpg" width="600" height="350" /></p>
                              		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
                             	</div>
                            </div>
                            
                            <div id="secondModal12" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                              	<h2 id="secondModalTitle">Getting Ready For A Date! - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                              	</h2>
                        		<div class="artRow"><!-- set up row for all art work view  -->
                              		<p align="center"><img src="../img/lgTheDate.jpg" width="600" height="399" /></p>
                              		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
                            	</div>
                            </div>
                            
                            <div id="secondModal13" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" 
                                aria-hidden="true" role="dialog">
                              	<h2 id="secondModalTitle">The Barrel - 
                                	<a href="#" data-reveal-id="myModal2" class="mLink">
                    					Return To View All!
                     				</a>
                              	</h2>
                        		<div class="artRow"><!-- set up row for all art work view  -->
                              		<p align="center"><img src="../img/lgBarrel.jpg" width="319" height="400" /></p>
                              		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
                             	</div>
                            </div>
                        
                        </div><!-- end of rows for picture modal window  -->
                    </div><!-- end of hide for small column  -->
                </div><!-- set up row for all art work view  -->
                <a class="close-reveal-modal" aria-label="Close">&#215;</a><!-- closing X for initial modal window -->
            </div><!-- End of myModal div  -->       

		</div><!-- End of initial row div  -->

		<div class="row">
		<!-- Column of pictures for small displays  -->
			<div class="small-12 show-for-small-only smallGalPics">
                <div class="smallGallery"><img src="../img/lgCall.jpg" alt="Calling in intruders..." /></div>
                <div class="smallGallery"><img src="../img/lgFleur1.jpg" /></div>
                <div class="smallGallery"><img src="../img/lgFleur2.jpg" /></div>
                <div class="smallGallery"><img src="../img/lgGettingReady.jpg" /></div>
                <div class="smallGallery"><img src="../img/lgMelt.jpg" /></div>
                <div class="smallGallery"><img src="../img/lgMooning.jpg" /></div>
                <div class="smallGallery"><img src="../img/lgMotivation.jpg" /></div>
                <div class="smallGallery"><img src="../img/lgRoses.jpg" /></div>
                <div class="smallGallery"><img src="../img/lgRoses2.jpg" /></div>
                <div class="smallGallery"><img src="../img/lgTheDate.jpg" /></div>
                <div class="smallGallery"><img src="../img/lgYumE.jpg" /></div>
                <div class="smallGallery"><img src="../img/lgBarrel.jpg" /></div>
			</div>
		</div>

	</div> <!-- End of primary-content -->
        

<?php
	include ('../includes/mainFooter.html');
?>
