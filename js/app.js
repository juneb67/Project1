//When mouse hovers, fade picture
$( ".imgNav" ).hover(function() {
  $( this ).fadeTo( "fast", 0.4 )
});

//When the mouse leaves, remove fade
$( ".imgNav" ).mouseleave(function() {
  $( this ).fadeTo( "fast", 1.0 )
});
