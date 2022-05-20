
<div class="row">
    <div class="col-sm-21">
        <div id="main_3d_image">
            <div id="main_text" class="col-xs-12 col-sm-4">
                <h2 id="title">Coca Cola Great Britain</h2>
                <h3>Founded by Dr John's Pemberton</h3>
                <p>The Coca-Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic
                    beverage concentrates and syrups, and produces nearly 400 brands.</p>
                <img src="assets/images/homepage/main_3D.jpg" class="img-fluid" alt="main_3D">
            </div>
        </div>
    </div>
</div>


<?php
$i=0;
foreach($handover as $k => $v){
    if(($i%2)==0){
        echo '<div class="row justify-content-around">';
    }
    echo '
    <div class="col-xs-12 col-sm-6">
        <div class="card" style="border-style: none;">
            <a href="#"><img class="card-img-top img-fluid img-thumbnail" class="border-0" class="img-fluid" src="'.$v["imagePath"].'"
                             alt="'.$v["title"].'"></a>
            <div class="card-body"><!---->
                <h3 class="card-title"">'.$v["title"].'</h3>
                <p class="card-text">'.$v["description"].'</p>
            </div>
            <a href="javascript:swapMainContent(\''.$v["title"].'\')" class="btn btn-primary">Find out more...</a>
        </div>
    </div>
        ';
    if(($i%2)!=0){
        echo '</div>';
    }
    $i++;
}
if($i>0 && ($i%2)!=0){
    echo '</div>';
}
?>
