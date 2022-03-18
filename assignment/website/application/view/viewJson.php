<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>JSON Sample</title>
    </head>
    <body>
        <div id="placeholder"></div>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script>
            //Use a relative path so that it works on the ITS Web Server
            $.getJSON('../model/createJson.php', function(data){
                //check the JSON object using the Chrome Inspect Element console, to make sure you have receieved the right data
                console.log(data);
                //then build the handler to strip out the data from the JSON object and wrap it in appropriate HTML
                var htmlCode="<ul>";
                //loop through the JSON array
                for (var i in data.users){
                    htmlCode += "<li>" + data.users[i].firtName
                        + " " +data.users[i].lastName + " | "
                        + data.users[i].joined.month + " | "
                        + data.users[i].joined.year+"</li>";
                }
                htmlCode+="</ul>";
                console.log(htmlCode);
                //assign HTML to the placeholder tag using JQuery .html() id selector method
                $('#placeholder').html(htmlCode);

                //alternatively, you can  use the Javasscript document.getElementById() method
                //document.getElementById("placeholder").innerHTML=output;
            });

        </script>
    </body>
</html>