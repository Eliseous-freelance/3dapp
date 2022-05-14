<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- title -->
    <title>Coca Cola 3D App</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://findicons.com/files/icons/917/soda_pop_caps/128/coca_cola.png"/>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <meta charset="utf-8">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>

    <!-- x3d models css --> // website/application/db/infoData.db
    <link rel='stylesheet' type='text/css' href='/its/home/ed385/public_html/3dapp/assignment/website/assets/css/x3dom.css'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/its/home/ed385/public_html/3dapp/assignment/website/assets/css/bootstrap_css/bootstrap.css">
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>

    <!-- Custom CSS needs to be last to override any bootstrap or x3dom xss as necessary -->
    <link rel="stylesheet" href="/its/home/ed385/public_html/3dapp/assignment/website/assets/css/custom.css">
</head>


<body id="cocaColaPage">



<!-- This is the coke page-->
<div class="container-fluid main_contents">
    <!--row to hold two cards to hold 1) the X3D model and 2) the gallery-->
    <div class="row">
        <!--column to hold teh X3D model-->
        <div class="col-xs-10 col-sm-8">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item"><a class="nav-link active" href="coke.html">Coke</a></li>
                        <li class="nav-item"><a class="nav-link" href="sprite.html">Sprite</a></li>
                        <li class="nav-item"><a class="nav-link" href="pepper.html">Dr Pepper</a></li>
                    </ul>
                </div>
                <!-- X3D model -->
                <div class="card-body">
                    <h4 class="card-title">Coca Cola X3D Model</h4>
                    <div class="3Dmodel">
                        <x3d width="500px" height="400px">
                            <scene>
                                <Transform>
                                    <inline nameSpaceName="ModelCoke" mapDEFToID="true"
                                            url="/its/home/ed385/public_html/3dapp/assignment/website/assets/images/3d_models/coke_bottle.x3d"></inline>
                                    <!--                                    <ImageTexture url='"can_texture.jpeg"'/> -->
                                    <navigationInfo type='"walk" "any"' id="navType"></navigationInfo>

                                    <Viewpoint id="front" position="-0.07427 0.95329 -2.79608"
                                               orientation="-0.01451 0.99989 0.00319 3.15833"
                                               description="camera"></Viewpoint>
                                    <Viewpoint id="right" position="-2.43383 1.07351 -1.28700"
                                               orientation="-0.00318 -0.99950 -0.03159 2.06609"
                                               description="camera"></Viewpoint>
                                    <Viewpoint id="back" position="-0.07427 0.95329 -2.79608"
                                               orientation="-0.01451 0.99989 0.00319 3.15833"
                                               description="camera"></Viewpoint>
                                    <Viewpoint id="left" position="-2.43383 1.07351 -1.28700"
                                               orientation="-0.00318 -0.99950 -0.03159 2.06609"
                                               description="camera"></Viewpoint>
                                </Transform>
                            </Scene>
                    </div>

                    <p class="card-text">This X3D model of the coke can has been created in Blender and converted to X3D
                        for display online.</p>
                    <h5 class="card-subtitle">Camera Views</h5>
                    <div class="camera-btns">
                        <p class="card-text">These buttons select a range of X3D model viewpoints</p>
                        <div class="btn-group ">
                            <a href="javascript:spin()" class="btn btn-primary btn-responsive camera-font">Front</a>
                            <a href="javascript:spin()" class="btn btn-secondary btn-responsive camera-font">Back</a>

                            <a href="javascript:hello()" class="btn btn-success btn-responsive camera-font">Left</a>
                            <a href="javascript:hello()" class="btn btn-danger btn-responsive camera-font">Right</a>

                            <a href="javascript:spin()" class="btn btn-warning btn-responsive camera-font">Top</a>
                            <a href="javascript:animateModel()" class="btn btn btn-responsive camera-font">Animate</a>
                            <a href="javascript:changeColor()" class="btn btn btn-responsive camera-font">Color</a>
                            <a href="javascript:stopRotation()"
                               class="btn btn-outline-dark disabled btn-responsive camera-font">Off</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xs-8 col-sm-4">
            <div class="card text-left">
                <div class="card-header gallery-header">Gallery</div>
                <div class="card-body">
                    <h4 class="card-title">Carousel</h4>
                    <div id="carousel">
                        <div id="carouselControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="./its/home/ed385/public_html/3dapp/assignment/website/gallery/assets/images/coca_cola.jpg"
                                         alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/its/home/ed385/public_html/3dapp/assignment/website/gallery/assets/images/dr_pepper.jpg"
                                         alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/its/home/ed385/public_html/3dapp/assignment/website/gallery/assets/images/fanta.png"
                                         alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/its/home/ed385/public_html/3dapp/assignment/website/gallery/assets/images/sprite.jpg"
                                         alt="Fourth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <p class="card-text">
                        These 3D images of the Fanta can, Coke bottle, Sprite bottle and Costa Coffee cup are rendered
                        using Blender
                    </p>
                </div>
            </div>
            <div class="card text-left">
                <div class="card-header gallery-header">
                    <h1>Gallery</h1>
                </div>
                <div class="card-body">
                    <h4 class="card-title">3D Image Gallery</h4>
                    <div id="gallery_images">
                    </div>
                    <p class="card-text">3D images of models rendered in Blender</p>
                </div>
            </div>
        </div>


    </div>
</div>


<script type='text/javascript' src='https://www.x3dom.org/x3dom/release/x3dom.js'></script>

<script src="./its/home/ed385/public_html/3dapp/assignment/website/js/models_animation/animations.js"></script>

<script src="/its/home/ed385/public_html/3dapp/assignment/website/js/bootstrap/bootstrap.js"></script>

<script src="/its/home/ed385/public_html/3dapp/assignment/website/gallery/gallery_generator.js"></script>
</body>

</html>