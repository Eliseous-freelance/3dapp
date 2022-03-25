<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap_css/bootstrap.css">

    <!--Fontawesome CSS-->
    <link rel="stylesheet" href="../../../assets/css/fonts.css">

    <!-- Gallery CSS-->
    <link href="../../../assets/css/gallery.css" rel="stylesheet" type="text/css">

    <!-- title -->
    <title>Coca Cola 3D App template</title>
    <!-- x3d models css -->
    <link rel='stylesheet' type='text/css' href='../../../assets/css/x3dom.css'>

    <!-- Custom CSS needs to be last to override any bootstrap or x3dom xss as necessary -->
    <link rel="stylesheet" href="../../../assets/css/custom.css">
</head>



<body id="cocaColaPage">
    <!-- This is the coke page-->
    <div class="container-fluid main_contents">
        <!--row to hold two cards to hold 1) the X3D model and 2) the gallery-->
        <div class="row">
            <!--column to hold teh X3D model-->
            <div class="col-sm-9">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item"><a class="nav-link" href="coke.html">Coke</a></li>
                            <li class="nav-item"><a class="nav-link" href="sprite.html">Sprite</a></li>
                            <li class="nav-item"><a class="nav-link" href="pepper.html">Dr Pepper</a></li>
                        </ul>
                    </div>
                    <!-- X3D model -->
                    <div class="card-body">
                        <h4 class="card-title">Coca Cola X3D Model</h4>
                        <div class="3Dmodel" id="main_3d_image">
                            <x3d width="500px" height="400px">
                                <scene>
                                    <inline url="../../../assets/images/3d_models/coke_bottle.x3d"></inline>
                                    <!--<ImageTexture url='"can_texture.jpeg"'/> -->
                                </scene>
                            </x3d>
                        </div>
                        <p class="card-text">This X3D model of the coke can has been created in Blender and converted to X3D for display online.</p>
                        <h5 class="card-subtitle">Camera Views</h5>
                        <div class="camera-btns">
                            <p class="card-text">These buttons select a range of X3D model viewpoints</p>
                            <div class="btn-group ">
                                <a href="#" class="btn btn-primary btn-responsive camera-font">Front</a>
                                <a href="#" class="btn btn-secondary btn-responsive camera-font">Back</a>
                                <a href="#" class="btn btn-success btn-responsive camera-font">Left</a>
                                <a href="#" class="btn btn-danger btn-responsive camera-font">Right</a>
                                <a href="#" class="btn btn-warning btn-responsive camera-font">Top</a>
                                <a href="#" class="btn btn-outline-dark disabled btn-responsive camera-font">Off</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
</body>

</html>