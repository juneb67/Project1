$(document).ready(function() {

//Get all the information about the navigation images and pages and put them into an object array
var pagesArray = [
	{
		smId:"pic1sm", 
		picNameSmall: "nav1.jpg"
	}, 
	{
		smId:"pic2sm", 
		picNameSmall: "nav2.jpg"
	}, 
	{
		smId: "pic3sm",
		picNameSmall: "nav3.jpg"
	}, 
	{
		smId: "pic4sm",
		picNameSmall: "nav4.jpg"
	}, 
	{
		smId: "pic5sm",
		picNameSmall: "nav5.jpg"
	}, 
	{
		smId: "pic6sm",
		picNameSmall: "nav6.jpg"
	}
];

//Get the location of the current page 
var fileName = location.pathname;

//Assign filename variable the key for the pagesArray
//.search will search "fileName" looking for the "" item
if (fileName.search("about") > 0 ){
	selPgNo = 1;
} else if (fileName.search("gallery") > 0 ){
	selPgNo = 2;
} else if (fileName.search("shop") > 0 ){
	selPgNo = 3;
} else if (fileName.search("commission") > 0 ){
	selPgNo = 4;
} else if (fileName.search("contact") > 0 ){
	selPgNo = 5;
} else {
	selPgNo = 0;
};

//Get the smID ID pic6sm, pic5sm, etc.
var picName = pagesArray[selPgNo].smId;

//Set textValue2 variable to equal the whole line of html for selected page
var textValue2 = '<div id="' + picName + '"></div>';
//put the value of textValue2 into the div.sel_480 div
//this keep the nav item from blurring on mouse over - it's the page the visitor is on
$( "div.sel_480" ).html(textValue2);

//The for loop will iterate through each object in the pagesArray array
//The function will then populate the css background with the correct image
//for the smaller screen sizes
for(var i = 0; i < pagesArray.length; i++){
	var key = "#"; //add the # sign for the ID
	key += pagesArray[i].smId; //Get the smId name
	var value = pagesArray[i].picNameSmall; // get the picture name
	//set the correct image (value) for the div ID provided by the key
	$(key).css("background-image", "url(../img/" + value + ")");
};

//Navigation for larger screens
//When mouse hovers, fade picture
$( ".imgNav" ).hover(function() {
  $( this ).fadeTo( "fast", 0.4 )
});
//When the mouse leaves, remove fade
$( ".imgNav" ).mouseleave(function() {
  $( this ).fadeTo( "fast", 1.0 )
});


}); //End of page ready function