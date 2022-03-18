<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test view</title>
        <!-- CSS stylesheet -->
        <link rel="stylesheet" href="../../assets/css/view3DAppdata.css">
        
    </head>
    <body>
        <h1>Model_3D Data returned from the SQLite database</h1>
        <?php for ($i=0;$i<count ($data);$i++){ ?>}
            <div class="boxModel">
                <div class="boxText">
                    <h2><?php echo $data[$i]['x3dModelTitle']?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['x3dCreationMethod']?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['modelTitle']?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['modelSubtitle']?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['modelDescription']?></h2>
                </div>
            </div>
        <?php }?>
    </body>
</html>