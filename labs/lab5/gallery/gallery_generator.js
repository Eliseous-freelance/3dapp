//JavaScript Gallery generator
$(document).ready(function () {
    //create the XMLHttpRequest object for communicating with the web server
    var xmlHttp = new XMLHttpRequest(); //will represent the object communicating to the server. We will call the function above in this variable’s definition.
    
    //stores newly generated gallery HTML code
    var htmlCode = ""; //variable used to store the newly generated gallery HTML code. This variable is instantiated as an empty string.
    //temporarily stores server response while code is generated
    var response; //this variable is also a string and is used temporarily to store the server response while the code is being generated.

    //set up the path to the PHP function that reads the image directory to find the thumbnail file names
    var send = "hook.php";

    //open the connection to the web server
    xmlHttp.open("GET", send, true);
    //tell the server that the clinet has no outgoing message, i.e., we are sending nothing to the server
    xmlHttp.send(null);
    //check we get a valid server response
    xmlHttp.onreadystatechange = function () { //links an embedded function asynchronously to the status of the ActiveXObject. Effectively, if the status changes (when the server replies) the function gets called. Inside the embedded function we check the status of the xmlHttp object. If the status equals to 4, the server has replied. 
        //if (xmlHttp.readyState == 4) {
            //tokenise the response
            response = xmlHttp.responseText.split("~");

            //loop round the reponse array of tokens, which are the image names...
            for (var i = 0; i < response.length; i++) {
                htmlCode += '<a href="assets/images/' + response[i] + ' ">';
                htmlCode += '<img class="card-img-top img-thumbnail" src="assets/images/' + response[i] + '">';
                htmlCode += '</a>';
            }
            //write the  HTML code into the gallery
            document.getElementById('gallery').innerHTML = htmlCode;
        //}
    }
});