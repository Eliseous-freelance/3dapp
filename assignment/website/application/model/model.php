<?php

include '../../debug/ChromePhp.php';
ChromePhp::log('model.php: Modelling data');
ChromePhp::log($_SERVER);

//get the brand name
ChromePhp::warn('model.php: Getting Brand details');
$brandName = $_GET['brand'];

ChromePhp::warn('model.php: Make a connection to data.db');

class Model{
    //Property declaration, in this case we are declaring a variable or handler that points to the database connection, this will become a PDO object
    public $dbhandle;
    public $dsn;

    //Method to crearte databse connection using PHP Data Objects (PDO) as the interface to SQLite
    public function __construct($dsn)
    {
        //Set up the database source name (DSN)
        $this->dsn = $dsn;

        //then create a connection to a database with the PDO() function 
        //connect to the database table and retrieve the required brand data
        try {
            //Change connection string for different databses, currently using SQLite
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
            //$this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCETION);
            //echo 'Database connection create</br></br>';

            ChromePhp::warn('model.php: Connected to data.db');
        } catch (PDOEXception $e) {
            echo "I can't connect to the database! D: ";
            //generate an error message if the connection fails
            print new Exception($e->getMessage());
        }
    }
    public function dbCreateTable()
    {
        echo "Create table function";
        try {
            $this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
            return "Model_3D table is successfully created inside test1.db file";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    public function dbInsertData()
    {
        echo "Daba insertion function";
        try {
            $this->dbhandle->exec("INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubstitle, modelSubtitle)
                                    VALUES (1, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');" .
                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubstitle, modelSubtitle)
                                    VALUES (2, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');" .
                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubstitle, modelSubtitle)
                                    VALUES (3, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');");
            return "X3D model data is inserted successfully inside test1.db";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    public function dbGetData()
    {
        echo "Data retrieval function";
        try {
            //prepare a statement to get all records from the Model_3D table
            $sql = 'SELECT * FROM Model_3D';
            //use PDO query() to query the database with the prepared SQL sstatement
            $stmt = $this->dbhandle->query($sql);

            //preapre a SQL statement to select a record matching the brand name selected in the view drop-down list
            ChromePhp::warn('model.php: Connected PDO SQL statement');

            ChromePhp::warn($stmt);
            //user up an array to return the results to the view
            $result = null;
            //set up a variable to index each row of the array
            $i = -0;
            //use PDO fetch() to retrieve the results from the database using a while loop
            //use a while loop to loop through the rows
            while ($data = $stmt->fetch()) {
                ChromePhp::warn('model.php:PDO fetch() data from data.db');
                ChromePhp::warn($data);
                //don't worry about this, it's just a simple teest to check we can output a value from the database in a while loop
                //echo '</br>'.$data['x3dModelTitle'];
                //write the database contents to the results array for sending back the view
                $result[$i]['brand'] = $data['brand'];
                $result[$i]['x3dModelTitle'] = $data['x3dModeldata'];
                $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                //increment the row index
                $i++;
                ChromePhp::warn('model.php: Here is the data.db data');
                ChromePhp::warn($result);
            }
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
            ChromePhp::warn('model.php: echo result to frontend in JSON packet');
            ChromePhp::warn($result);
            echo json_encode($result);
        }
        //close the database connection
        $this->dbhandle = NULL;
        //send the response back to the view
        return $result;
    }
    public function dbDrinkDetails()
    {
        //
    }

    public function dbGetBrand()
    {
        //return the Brand Names
        return array("_", "Coke", "Coke Light", "Coke Zero", "Sprite", "Dr Pepper", "Fanta");
    }
}
