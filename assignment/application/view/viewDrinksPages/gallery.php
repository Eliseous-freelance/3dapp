<?php

$galleryTitle="";
$carouselText="";
$galleryText="";
$imageFolder="";
$modelAnimationPath="";
$galleryGeneratorPath="";
foreach ($handover['galleryData'] as $key => $value) {
    if ($key == 'galleryTitle'){
        $galleryTitle = $value;
    }
    else if ($key == 'carouselText'){
        $carouselText = $value;
    }
    else if ($key == 'galleryText'){
        $galleryText = $value;
    }
    else if ($key == 'imagePath'){
        $imageFolder = $value;
    }
    else if ($key == 'modelAnimationPath'){
        $modelAnimationPath = $value;
    }
    else if ($key == 'galleryGeneratorPath'){
        $galleryGeneratorPath = $value;
    }
}



$galleryPath = "gallery/assets/carouselImages/coca_cola.jpg";


echo '
        <div class="col-xs-8 col-sm-4">
            <div class="card text-left" style="border-style: none;">
                <div class="card-header gallery-header">Carousel</div>
                <div class="card-body">
                    <div id="carousel">
                        <div id="carouselControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                
                                
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="' . $galleryPath . '"
                                         alt="First slide">
                                </div>';


if (is_dir("./../".$imageFolder)){
    if ($dh = opendir("./../".$imageFolder)){
        while (($file = readdir($dh)) !== false) {
            if ($file !== "." && $file !== ".." && $file !== "coca_cola.jpg") {
                echo '<div class="carousel-item">
                    <img class="d-block w-100" src="'. $imageFolder . $file . '" alt="Second slide">
                  </div>';
            }
        }
        closedir($dh);
    }
}

echo '
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
                        ' . $carouselText . '
                    </p>
                </div>
            </div>
            <div class="card text-left" style="border-style: none;">
                <div class="card-header gallery-header">
                    <h1 onclick="loadLib();loadLibrary()">Gallery</h1>
                </div>
                <div class="card-body">
                    <div id="gallery_images">
                    </div>
                    <p class="card-text">' . $galleryText . '</p>
                </div>
            </div>
        </div>
    </div>
</div>';

?>