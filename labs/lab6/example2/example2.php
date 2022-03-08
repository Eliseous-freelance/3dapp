<!DOCTYPE html>
<html>
<head>
    <title>My PHP Page</title>
</head>

<body>
    <p>
        <a href="example2.php?id=homepage">Homepage</a>
        <a href="example2.php?id=work">Work</a>
        <a href="example2.php?id=about">About</a>
    </p>

    <?php
        $example2 = $_GET['id'];
        if($example2 == "work"){
            echo "<p><b>Work:</b> here is my work.</p>";
        }
        else if($example2 == "about"){
            echo "<p><b>About:</b> read about me.</p>";
        }
        else{
            echo "<p><b>Homepage:</b> Welcome to my website.</p>";
        }
    ?>
</body>
</html>