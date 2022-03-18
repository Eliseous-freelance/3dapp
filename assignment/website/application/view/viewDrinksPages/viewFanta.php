<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="../../assets/css/viewGallery.css">
</head>

<body id="fantaPage">


    <!-- This is the coke page-->
    <div class="container-fluid main_contents">
    <h1>Model_3D Data returned from the SQLite database</h1>
    <?php for ($i = 0; $i < count($data); $i++) { ?>}
    <div class="boxModel">
        <div class="box">
            <!-- for i in models echo model -->
            <h2><?php echo $model_1 ?></h2>
            <img class="imgBox" src='../assets/images/<?php echo $image3D_1 ?>.png'>
        </div>
        <div class="boxText">
            <h2><?php echo $data[$i]['x3dModelTitle'] ?></h2>
        </div>
        <div class="boxText">
            <h2><?php echo $data[$i]['x3dCreationMethod'] ?></h2>
        </div>
        <div class="boxText">
            <h2><?php echo $data[$i]['modelTitle'] ?></h2>
        </div>
        <div class="boxText">
            <h2><?php echo $data[$i]['modelSubtitle'] ?></h2>
        </div>
        <div class="boxText">
            <h2><?php echo $data[$i]['modelDescription'] ?></h2>
        </div>
    </div>
<?php } ?>



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

    </div>
</body>

</html>