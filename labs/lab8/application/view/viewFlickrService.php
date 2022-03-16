<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <title>Test view - flickr Web Service</title>

    <!-- FlickrService CSS -->
    <link rel="stylesheet" href="../../assets/css/flickrService.css">

</head>
<body>
    <h1>Flickr Web Service</h1>
    <h2> Search on Flickr Feed</h2>
    <!-- Text input box -->
    <div class="textInput">
        <input type="text" value="Sprite" id="txt"/>
    </div>
    <div class="btn">
        <button onclick="loadImages()">Search</button>
    </div>

    <div class="box">
        <h1 id="title"></h1>
        <h2 id="link"></h2>
        <p id="description"></p>
        <p id="modified"></p>
        <p id="generator"></p>
        <div id="images"></div>
    </div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../view/flickrService.js"></script>
</body>
</html>
