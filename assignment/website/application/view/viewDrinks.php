<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="uft-8">
        <title>Drinks Image View</title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>

    </head>
    <body>
        <h1 style="margin:5px; padding:10px;">Chose a drink brand to see more details</h1>
        <b style="margin:5px; padding:10px">Select a drinks brand name: </b>
        <form style="margin:5px; padding:10px;">
            <select id="select">
                <?php
                    //debug
                    //$data = array("A", "B", "C", "D", "E");
                    for ($i=0;$i<=count($data);$i++)
                        echo '<option value="'.$data[$i].'">'.$data[$i].'</option>';
                ?>
            </select>
        </form>
        <!-- Inject the HTML into this div tag placeholder -->
        <div id="placeholder" style='margin:5px; padding:10px;'>Insert data here</div>
        
        <script>
            $(document).ready(function(){
                $('#select'.change(function (){
                    //debug
                    var model = $(this).val();
                    console.log('Driks Model:', model, 'has been selected');
                    //variable to hold the HTML as we build it for inserting into the place holder
                    var str = "";
                    //process the selection to select the desired drinks brand
                    $("select option:selected").each(function(){
                        //start to build the HTML starting with a title
                        str += "<div><b>Drinks Brand: </b> " + $(this).text() + "</div>" + "</br>";
                        //debug
                        console.log('HTML Title is:', $(this).text());
                        //debug
                        console.log('Selected brand model:', selection);
                        //build a URL path to the php model used to read the drinks brand data
                        var brandUrl = "../application/model/modelDrinksDetails.php?brand=" + selection;
                        //debug
                        console.log('URL to PHP Model is:', brandUrl);
                        var debugUrl = "../application/model/phpDebug.php";
                        // fire the AJAX call with the .getJSON function to get the service response from the Url (to the web server)
                        $.getJSON(brandUrl)
                        .done(function(json){
                            //debug 
                            console.log('Web service reponse for drink brand data: , json');
                            //Write the andler to display the results in an HTML view
                            //start the container div tag
                            str +="<div width=90%; style='float:left; margin:5px; border:1px solid;  border-color: blue; padding:10px;'>";
                            //build the HTML view - we need to loop because we may have more than one of a particular brand
                            for (var i=0;i<json.length;i++){
                                //grab the drink brand details
                                str+=
                                    "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].brand + "</div>" + 
                                    "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].x3dModelTitle + "</div>" + 
                                    "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].x3dCreationMethod + "</div>" + 
                                    "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].modelTitle + "</div>" + 
                                    "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].moduleSubtitle + "</div>" + 
                                    "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].modelDescription + "</div>";
                                //and, the drink brand name
                                str += 
                                "<div width='30%' style='float:left; margin:5px; border:1px solid; border-color: green; border-radius: 10px; padding:10px;'>" +
                                "<img width='300px' src='../assets/images/gallery_images/" + json[i].brand + ".jpg'></img>" +
                                "</div>";
                            }
                            //close off the container
                            str+="</div>";
                            //and return the constructed HTML to the '</div> placeholder </div>'
                            document.getElementById("placeholder").innerHTML=str;
                            //alternatively, you could use the JQuery.html() method to return the HTML string to the placeholder div tag
                            //$('#placeholder').html(str);
                        })
                        .fail(function(){
                            console.log('viewDrinks JS Handler: Server returned an error, trap this in your PHP server code');
                        });
                    });
                }));
            });
        </script>
    </body>
</html>