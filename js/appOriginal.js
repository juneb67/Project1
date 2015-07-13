$(document).ready(function() {
	
//Get all the information about the navigation images and pages into an object array
var pagesArray = [
	{
		divId:"pic1", 
		smId:"pic1sm", 
		picNameSmall: "nav1.jpg", 
		picNameMedium: "navMed1.jpg",
    	picNameLarge: "smSquidGirl.png",
    	pagename: "Home",
    	pageAddress: "index.php"
	}, 
	{
		divId:"pic2", 
		smId:"pic2sm", 
		picNameSmall: "nav2.jpg", 
		picNameMedium: "navMed2.jpg",
    	picNameLarge: "smMotivation.png",
    	pagename: "About",
    	pageAddress: "index.php"
	}, 
	{
		divId: "pic3",
		smId: "pic3sm",
		picNameSmall: "nav3.jpg",
		picNameMedium: "navMed3.jpg",
		picNameLarge: "smRoses.png",
		pagename: "Gallery",
		pageAddress: "gallery.html"
	}, 
	{
		divId: "pic4",
		smId: "pic4sm",
		picNameSmall: "nav4.jpg",
		picNameMedium: "navMed4.jpg",
		picNameLarge: "smMelt.png",
		pagename: "Shop",
		pageAddress: "shop.html"
	}, 
	{
		divId: "pic5",
		smId: "pic5sm",
		picNameSmall: "nav5.jpg",
		picNameMedium: "navMed5.jpg",
		picNameLarge: "smGettingReady.png",
		pagename: "Commission",
		pageAddress: "commission.html"
	}, 
	{
		divId: "pic6",
		smId: "pic6sm",
		picNameSmall: "nav6.jpg",
		picNameMedium: "navMed6.jpg",
		picNameLarge: "smYumE.png",
		pagename: "Contact",
		pageAddress: "contact.html"
	}
];

//Get the location of the current page 
var fileName = location.pathname;

//Assign filename variable the key for the pagesArray
if(fileName === "index.php") {
	var selPgNo = 0;
} else if (fileName === "/about/"){
	selPgNo = 1;
} else if (fileName === "/gallery/"){
	selPgNo = 2;
} else if (fileName === "/shop/"){
	selPgNo = 3;
} else if (fileName === "/commission/"){
	selPgNo = 4;
} else {
	selPgNo = 5;
};

//Navigation for smaller < 480 screen size
//This array will fill in the ID and the image for each navigation item.
var obj = {
  "#pic1sm": "nav1.jpg",
  "#pic2sm": "nav2.jpg",
  "#pic3sm": "nav3.jpg",
  "#pic4sm": "nav4.jpg",
  "#pic5sm": "nav5.jpg",
  "#pic6sm": "nav6.jpg"
};

//page address with page name in navigation
var pages = {
  "index.php": "Home",
  "about.php": "About",
  "gallery.html": "Gallery",
  "shop.html": "Shop",
  "commission.html": "Commission",
  "contact.html": "Contact"
};

//pic name object to use below for the selected page
var picNameObj = {
  "Home": "pic1sm",
  "About": "pic2sm",
  "Gallery": "pic3sm",
  "Shop": "pic4sm",
  "Commission": "pic5sm",
  "Contact": "pic6sm"
};


//Get href for .selected_480 - this will be the "selected" page's name
var selectedHREF = $('.selected_480').attr('href');

var pgToName = pages[selectedHREF];

var picName = picNameObj[pgToName];
//console.log("line 30 Pic name is: " + picName);

//Set textValue2 variable to equal the whole line of html for selected page
var textValue2 = '<div id="' + picName + '"><h2 class="linkStyle">' + pages[selectedHREF] + '</h2></div>';
//console.log("Line 29 html is: " + textValue2);
$( "div.sel_480" ).html(textValue2);

//The .each function will iterate through each object in the obj array
//The function will then populate the css background with the correct image
$.each( obj, function( key, value ) {
	$(key).css("background-image", "url(../img/" + value + ")");
});

//Navigation for larger screens
//When mouse hovers, fade picture
$( ".imgNav" ).hover(function() {
  $( this ).fadeTo( "fast", 0.4 )
});
//When the mouse leaves, remove fade
$( ".imgNav" ).mouseleave(function() {
  $( this ).fadeTo( "fast", 1.0 )
});

//Problem user when clicing on image goes to a dead end
//Solution: create an overlay with the large image - Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $caption = $("<p></p>");

//An image to overlay
$overlay.append($image);

//A caption
$overlay.append($caption);

//Add overlay
$("body").append($overlay);

//Capture the click event on a link to an image.
$("#imageGallery a").click(function(event){
  var imageLocation = $(this).attr("href");
  
  event.preventDefault();
  
  //Update overlay with the image linked in the link
  $image.attr("src", imageLocation);

  //Show the overlay
  $overlay.show();

  //Get child's alt attribute and set caption
  var captionText = $(this).children("img").attr("alt");
  $caption.text(captionText);  
  
});
  
//When overlay is clicked
$overlay.click(function(){
  //Hide the overlay
  $overlay.hide();
});



}); //End of page ready function