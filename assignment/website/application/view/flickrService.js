//JavaScript gallery generator using Flickr to source the images
$(document).ready(function(){
    //call the loadImage method, you can comment his out if you don't want it to load immediately
    loadImages();
});

function loadImages(){
    //grab the image type you are looking for
    var txt = document.getElementById('txt').value;
    console.log(txt);
    //create a URI for the Flickr web service API call
    var urlFlickr = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
    //use the JQuery .getJson() method to fetch the JSON object back from the Flickr web service
    $.getJSON(urlFlickr, {tags: txt, tagmode:"all", format:"json"}, function(data){
        //use console.log() to inspect the returned JSON object
        console.log(data);
        //then build a handler to grab the data you want, i.e., in this cases the images related to the input value stored in txt
        $('#title').html(data.title);
        $('#link').html(data.link);
        $('#description').html(data.description);
        $('#modified').html(data.modified);
        $('#generator').html(data.generator);
        var htmlCode = "";
        //examine the console.log(data) and you will see we have an array of items returned in the data JSON object that we have to 
        $.each(data.items, function(i, item){
            //you will remember this approach from the previous  gallery code in lab 5
            htmlCode += '<div class="imgBox">' + '<div><h3> Title: ' + item.title + '</h3></div>';
            htmlCode += '<img src="' + item.media.m + '"/>';
            htmlCode += '<div><h4> Published: ' + item.published + '</h4></div></div>';
            //set the loop variable, i.e., how many images you want returned, say the first 4 images.
            // or comment out if you want all images in the search returned
            if(i==3) return false;
        });
        //assign the htmlCode to the images ID selector
        $('#images').html(htmlCode);
    });
}
