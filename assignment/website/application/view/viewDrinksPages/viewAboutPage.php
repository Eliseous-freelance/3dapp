<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Test view</title>
    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="../../assets/css/view3DAppdata.css">
</head>

<body>
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



    
    <h1>Coca Cola products</h1>
    <div class="box">
        <h2>Coke Can 3D Image 1</h2>
        <a href="default.asp"><img class="imgBox" src='../../assets/images/gallery/coke_1.png'></a>
    </div>
    <div class="box">
        <h2>Coke Can 3D Image 2</h2>
        <a href="default.asp"><img class="imgBox" src='../../assets/images/gallery/coke_2.png'></a>
    </div>
    <div class="box">
        <h2>Sprite Bottle 3D Image 1</h2>
        <a href="default.asp"><img class="imgBox" src='../../assets/images/gallery/sprite_1.png'></a>
    </div>
    <div class="box">
        <h2>Sprite Bottle 3D Image 2</h2>
        <a href="default.asp"><img class="imgBox" src='../../assets/images/gallery/sprite_2.png'></a>
    </div>
    <div class="box">
        <h2>Dr Pepper Cup 3D Image 1</h2>
        <a href="default.asp"><img class="imgBox" src='../../assets/images/gallery/pepper_1.png'></a>
    </div>
    <div class="box">
        <h2>Dr Pepper Cup 3D Image 2</h2>
        <a href="default.asp"><img class="imgBox" src='../../assets/images/gallery/pepper_2.png'></a>
    </div>

    <div class="box">
        <h2>Fanta Can 3D Image 1</h2>
        <a href="default.asp"><img class="imgBox" src='../../assets/images/gallery/fanta_1.png'></a>
    </div>
    <div class="box">
        <h2>Fanta Can 3D Image 2</h2>
        <a href="default.asp"><img class="imgBox" src='../../assets/images/gallery/fanta_2.png'></a>
    </div>
    <!--div#id-->
    <!-- div.class -->
    <!-- div.class#id -->
    <!-- div.class#id>h2{hi motherfuckers}+p>lorem43 -->
    <!--div.class#id>h2{hi motherfuckers}+p>lorem43^^div.container>section.sectionContainer>p{lorem50}-->

   <!-- This is the coke page-->
   <div class="container-fluid main_contents">
    <h1>Model_3D Data returned from the SQLite database</h1>
    <?php for ($i = 0; $i < count($data); $i++) { ?>
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
   

    <div id="view3DAppTest">
        <h1>Initial 3D App test view</h1>
        <?php
        echo $model_1 . "<br>";
        echo $model_2 . "<br>";
        echo $model_3 . "<br>";
        echo $model_4 . "<br>";
        echo $model_5 . "<br>";
        echo $model_6 . "<br>";
        ?>
        <p>If you are seeing the test data above Model 3D Image Data, then your basic MVC framework is working</p>
    </div>

</body>

</html>