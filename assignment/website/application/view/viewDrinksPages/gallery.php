<?php

foreach($handover as $k => $v){ //2 arrays containing models and gallery

    echo sizeof($k);

//    if (in_array($v['creationMethod'], $handover) && in_array($v['modelTitle'], $handover) && in_array($v['modelTexture'], $handover) && in_array($v['modelDescription'], $handover) && in_array($v['modelPath'], $handover)){
        $creationMethod = $v['creationMethod'];
        $modelTitle = $v['modelTitle'];
        $modelTexture = $v['modelTexture'];
        $modelDescription = $v['modelDescription'];
        $modelPath = $v['modelPath'];
//    }
//    else if (in_array($v['galleryTitle'], $handover) && in_array($v['carouselText'], $handover) && in_array($v['galleryText'], $handover) && in_array($v['galleryImagePath'], $handover) && in_array($v['modelPath'], $handover)){
        $galleryTitle = $v['galleryTitle'];
        $carouselText = $v['carouselText'];
        $galleryText = $v['galleryText'];
        $galleryPath = $v['galleryImagePath'];
//    }
//    else {
//        echo $v;
//    }


}

echo '

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
                                    <img class="d-block w-100" src="gallery/assets/carouselImages/coca_cola.jpg"
                                         alt="First slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="'.$galleryPath.'"
                                         alt="Second slide">
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
                        '.$carouselText.'
                    </p>
                </div>
            </div>
            <div class="card text-left">
                <div class="card-header gallery-header">
                    <h1>Gallery</h1>
                </div>
                <div class="card-body">
                    <h4 class="card-title">'.$galleryTitle.'</h4>
                    <div id="gallery_images">
                    </div>
                    <p class="card-text">'.$galleryText.'</p>
                </div>
            </div>
        </div>
    </div>
</div>'




?>