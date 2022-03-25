<!DOCTYPE html>
<html>
<head>
    <title>My PHP Page</title>
</head>

<body>
    <?php include "php/header.php"?>

    <?php
        $example2 = $_GET['id'];
        if($example2 == "coke"){
            echo "<p><b>Coke:</b> The Coca Cola Tab.</p>";
        }
        else if($example2 == "sprite"){
            echo "<p><b>Sprite:</b> The Sprite Tab.</p>";
        }
        else if($example2 == "pepper"){
            echo "<p><b>Dr Pepper:</b> The Dr Pepper Tab.</p>";
        }
    ?>

    <?php include "php/footer.php"?>
    
</body>
</html>