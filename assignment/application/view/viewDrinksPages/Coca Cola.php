<?php



$creationMethod="";
$modelTitle="";
$modelDescription="";
$modelTexture="";
$modelPath="";
foreach ($handover['cokeModelData'] as $key => $value) {
    if ($key == 'creationMethod') {
        $creationMethod = $value;
    } else if ($key == 'modelTitle') {
        $modelTitle = $value;
    } else if ($key == 'modelDescription') {
        $modelDescription = $value;
    } else if ($key == 'modelTexture') {
        $modelTexture = $value;
    } else if ($key == 'modelPath') {
        $modelPath = $value;
    }
}

$coke = "Coca Cola";
$fanta = "Fanta";
$sprite = "Sprite";
$pepper = "Dr Pepper";

echo ' <p>This X3D model has been created in Blender and converted to X3D
                for display online.</p';
echo '
<!-- This is the coke page-->
<div class="container-fluid main_contents">
    <!--row to hold two cards to hold 1) the X3D model and 2) the gallery-->
    <div class="row">
        <!--column to hold teh X3D model-->
        <div class="col-xs-10 col-sm-8">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item"><a class="nav-link active" href="javascript:swapMainContent(' . $coke . ')">Coke</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:swapMainContent(' . $sprite . ')">Sprite</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:swapMainContent(' . $pepper . ')">Dr Pepper</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:swapMainContent(' . $fanta . ')">Fanta</a></li>
                    </ul>
                </div>
            </div>

            <!-- X3D model -->
            <div class="card-body">
                <x3d width="500px" height="400px">
                    <scene>
                        <Transform>
                            <inline nameSpaceName="Model" mapDEFToID="true"
                                    url="' . $modelPath . '"></inline>
                          
                            <navigationInfo type=' . ".walk." . "any" . ' id="navType"></navigationInfo>
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
                    </scene>
                </x3d>
                </div>
        <div class="camera-btns">
            <div class="btn-group ">
                <a onclick="loadLib()" class="btn btn-primary btn-responsive">View</a>
                <a href="javascript:changeView()" class="btn btn-primary btn-responsive">Front</a>
                <a href="javascript:changeView()" class="btn btn-secondary btn-responsive">Back</a>

                <a href="javascript:changeView()" class="btn btn-success btn-responsive">Left</a>
                <a href="javascript:changeView()" class="btn btn-danger btn-responsive">Right</a>

                <a href="javascript:spin()" class="btn btn-warning btn-responsive">Rotate</a>
                <a href="javascript:changeColor()" class="btn btn-responsive">ChangeEnvColor</a>
                <a href="javascript:toggleLight()" class="btn btn-responsive">Light</a>
                <a href="javascript:stopRotation()"
                   class="btn btn-outline-dark disabled btn-responsive camera-font">Off</a>
            </div>
        </div>
    </div>

        ';



?>
<!--<ImageTexture url="can_label.png"/>-->
