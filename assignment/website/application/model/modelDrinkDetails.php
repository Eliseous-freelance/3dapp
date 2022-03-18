<?php
    include '../../debug/ChromePhp.php';
    ChromePhp::log('modelDrinkDetails.php: Hello World');
    ChromePhp::log($_SERVER);

    //get the brand name
    ChromePhp::warn('modelDrinkDetails.php: Get Brand details');
    $brandName = $_GET['brand'];

    ChromePhp::warn('modelDrinkDetails.php: Make a connection to test1.db');
    //connect to the database table and retrieve the required brand data
    try{
        //make a connection to the drinks database
        $dbhandle = new PDO('sqlite:../../db/test1.db', 'user', 'password', array(
                                                                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                                            PDO::ATTR_EMULATE_PREPARES => false,
                                                                            ));
        ChromePhp::warn('modelDrinkDetails.php: Connected to test1.db');

        //preapre a SQL statement to select a record matching the brand name selected in the view drop-down list
        ChromePhp::warn('modelDrinkDetails.php: Connected PDO SQL statement');
        $stmt = $dbhandle->query($sql);
        ChromePhp::warn($stmt);
        
        //set up an array to return the results to the view
        $result = null;
        // set up a variable to index each row of the arrray
        $i=0;
        //use PDO fetchall() the results from the database using a while loop
        //use a while loop to loop through the table rows - there may be more than one record with the same brand name
        while ($data = $smt->fetch()){
            ChromePhp::warn('modelDrinksDetails.php:PDO fetch() data from test1.db');
            ChromePhp::warn($data);
            //write the database contents to the results array for sending back to the view
            $result[$i]['brand'] = $data['brand'];
            $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
            $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
            $result[$i]['modelTitle'] = $data['modelTitle'];
            $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
            $result[$i]['modelDescription'] = $data['modelDescription'];
            //increment the row index
            $i++;
            ChromePhp::warn('modelDrinkDetails.php: Here is the test1.db data');
            ChromePhp::warn($result);
        }
    }
    catch (PDOException $e){
        ChromePhp::warn('modelDrinkDetails.php: echo result to frontend in JSON packet');
        ChromePhp::warn($result);
        echo json_encode($result);
    }
?>