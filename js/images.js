$(document).ready(function () {
  $('button').click(function () {
    $("button").removeClass("selected");
    $(this).addClass("selected");
    var flickerAPI = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?"; // Making a JSONP request
    var animal =$(this).text(); // gets all of the text from html element
    var flickrOptions = {
      tags: animal, 
      format: "json"// tag tells Flickr to search for for photos with this tag - format we want is the json format
    };
    function displayPhotos(data) { // data is what is returned form Flickr - it's JavaScript at this point
      var photoHTML = '<ul>';
      //$.each( array, function (i, item) {}); JQuery loop
      $.each( data.items, function (i, photo) {
        photoHTML += '<li class="grid-25 tablet-grid-50">';
        photoHTML += '<a href="' + photo.link + '" class="image">';
        photoHTML += '<img src="' + photo.media.m + '"></a></li>';
      });
      photoHTML += '</ul>';
      $('#photos').html(photoHTML);
    }
    $.getJSON(flickerAPI, flickrOptions, displayPhotos);
    //(URL to the resource, the data we want to send along with the URL, a callback function - the programming that runs when Flickr sends back its response)
  });
}); // end ready