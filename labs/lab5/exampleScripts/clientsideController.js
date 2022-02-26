// Load XML package
var xm1Http = getXMLHttp();
// Variable definitions.
var numberOfColumns = 3;
var htmlCode = "";
var response;

// When page loads
$(document).ready(function() {
    // 1. Connect to the php file
    var send = "hook.php";
    xmlHttp.open("GET", send, true);
    xmlHttp.send(null);
    xmlHttp.onreadystatechange = function(){
        // 2. Handle the php response
        if(xmlHttp.readyState = 4){
            if(xmlHttp.responseText){
                // 3. Tokanize the response
                response = xmlHttp.responseText.split("~");
                htmlCode += '<tr>';
                // 4. Generate the HTML code.
                for (var i=0;i<response. length; i++) {
                    htmlCode += '<td id="gallery_cell"><a href="' + response[i] + '"class="lightbox _trigger">';
                    htmlCode+= '<img src="' + response[i] + '"id="image_thumbnail"/></a></td>';
                    if(((i+1)%numberOfColumns)==0) htmlCode+='</tr><tr>';
                }
                    htmlCode += '/<tr>';
                    // 5. Add it to the page
                    document.getElementById('gallery'). innerHTML = htmlCode;
            }
        }
    }
});