//JavaScript Gallery generator

//create the XMLHttpRequest object for communicating with the web server
var xmlHttp = new XMLHttpRequest(); //will represent the object communicating to the server. We will call the function above in this variable’s definition.
//stores number of horizontalColumns gallery has, if too large it won't fit in browser window
var numberOfColumns = 4; //	this is a simple integer that stores the number of horizontal columns the gallery will have. This is a parameter you can customize. However, if the number is too large, the gallery will be too wide and will not fit on your browser window.  
//stores newly generated gallery HTML code
var htmlCode = ""; //variable used to store the newly generated gallery HTML code. This variable is instantiated as an empty string.
//temporarily stores server response while code is generated
var response; //this variable is also a string and is used temporarily to store the server response while the code is being generated.

$(document).ready(function(){
    //set up the path to the PHP function that reads the image directory to find the thumbnail file names
    var send = "../php/hook.php";
    //open the connection to the web server
    xmlHttp.open("GET", send, true);
    //tell the server that the clinet has no outgoing message, i.e., we are sending nothing to the server
    xmlHttp.send(null);
    //check we get a valid server response
    xmlHttp.onreadystatechange = function(){ //links an embedded function asynchronously to the status of the ActiveXObject. Effectively, if the status changes (when the server replies) the function gets called. Inside the embedded function we check the status of the xmlHttp object. If the status equals to 4, the server has replied. 
        if(xmlHttp.readyState == 4){
            //response handler code
            alert(xmlHttp.responseText);
            //tokenise the response
            response = xmlHttp.responseText.split("~");
            //start to write the HTML code into the html code string
            htmlCode += '<tr>';
            //loop round the reponse array of tokens, which are the image names...
            for (var i=0;i<response.length;i++){
                //and continue to build the HTML code for the gallery
                htmlCode += '<td id="gallery_cell';
                htmlCode += '<a href="' + 'images/' + response[i] + '">';
                htmlCode += '<img src="images/' + response[i] + '" id="image_thumbnail"/>';
                htmlCode += '</a>';
                htmlCode += '</td>';
                //control the column layout for the galley thumbnails
                if(((i+1)%numberOfColumns)==0){
                    htmlCode += '</tr><tr>';
                }
            }
            htmlCode += '</tr>';
            //write the  HTML code into the gallery
            document.getElementById('gallery').innerHTML = htmlCode;
        }
    }
});