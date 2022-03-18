<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Coca Cola</title>
</head>

<body id="coca_cola_page">
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
                        <p class="card-text">This X3D model of the coke can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.</p>
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


        <!-- column to hold 3D Image gallery-->
        <div class="col-sm-3">
            <div class="card text-left">
                <div class="card-header gallery-header">
                    <h1>Gallery</h1>
                </div>
                <div class="card-body">
                    <h4 class="card-title">3D Image Gallery</h4>
                    <!-- Coke image-->
                    <a href="coke.html"><img class="card-img-top img-fluid img-thumbnail" src="assets/images/coca_cola.jpg" alt="coca cola"></a>
                    <!-- Sprite image-->
                    <a href="sprite.html"><img class="card-img-top img-fluid img-thumbnail" src="assets/images/sprite.jpg" alt="Sprite"></a>
                    <!-- Dr Pepper image-->
                    <a href="pepper"><img class="card-img-top img-fluid img-thumbnail" src="assets/images/dr_pepper.jpg" alt="Dr Pepper"></a>
                    <p class="card-text">3D images rendered in Blender 2022</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Row to hold 1 card to hold the coca cola descriptive text, etc.-->
    <div class="row">
        <!-- Coca Cola Column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Coca Cola</h3>
                    <p class="card-text">Atlanta Beginners: It was 1886, and in New York Harbour, workers were constructing the
                        Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled.
                        Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple
                        curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he
                        carried it a few doors down to Jacobs' Pharmacy. Here, the mixture was combined with carbonated water and
                        sampled by customers who all agreed
                        - this new drink was something special.
                        So, Jacobs' Pharmacy put it on sale for five cents (about 3p) a glass.</p>
                    <a href="#" class="btn btn-primary">Find out more...</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>