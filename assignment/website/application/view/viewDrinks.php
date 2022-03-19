<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Drink</title>
</head>

<body>
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
                        <!-- Temporary image instead of <div id="main_3d_image"</div>-->
                        <div class="model3D">
                            <x3d>
                                <scene>
                                    <inline url="assets/x3d/coke.x3d"></inline>
                                </scene>
                            </x3d>
                        </div>
                        <p class="card-text">This X3D model has been created in Blender and exported to x3Dom for display online.</p>
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


</body>

</html>