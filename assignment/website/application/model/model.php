<?php

/**
 * 
 */
class Model
{
    //Property declaration, in this case we are declaring a variable or handler that points to the database connection, this will become a PDO object
    public $handle;
    public $dsn;

    /**
     * constructor to create database connection using PHP Data Objects (PDO) as the interface to SQLite
     */
    public function __construct($dsn)
    {
        //Set up the database source name (DSN)
        $this->dsn = $dsn;

        //then create a connection to a database with the PDO() function 
        //connect to the database table and retrieve the required brand data
        try {
            //Change connection string for different databases, currently using SQLite
            $this->handle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
            $this->handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Database connection created';
        } catch (PDOEXception $e) {
            echo "I can't connect to the database! D: ";
            print new Exception($e->getMessage());
        }
    }

    public function dbCreateTable()
    {
        try {
            $this->handle->exec("
                    CREATE TABLE [IF NOT EXISTS] Model_3D (
                        Id INTEGER PRIMARY KEY, 
                        x3dModelTitle TEXT NOT NULL, 
                        x3dCreationMethod TEXT NOT NULL, 
                        modelTitle TEXT NOT NULL, 
                        modelSubtitle TEXT NOT NULL, 
                        modelDescription TEXT NOT NULL)");
            return "Model_3D table is successfully created inside data.db file";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->handle = NULL;
    }

    public function dbInsertData($x3dModelTitle, $x3dCreationMethod, $modelTitle, $modelSubtitle, $modelDescription)
    {
        echo "Data insertion function";
        try {
            $this->handle->exec("INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubstitle, modelSubtitle)
                                    VALUES (1, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');" .
                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubstitle, modelSubtitle)
                                    VALUES (2, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');" .
                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubstitle, modelSubtitle)
                                    VALUES (3, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');");
            return "X3D model data is inserted successfully inside test1.db";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->handle = NULL;
    }
    
    public function dbGetData()
    {
        echo "Data retrieval function";
        try {
            //prepare a statement to get all records from the Model_3D table
            $sql = 'SELECT * FROM Model_3D';
            //use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->handle->query($sql);

            //prepare a SQL statement to select a record matching the brand name selected in the view drop-down list

            //user up an array to return the results to the view
            $result = null;
            //set up a variable to index each row of the array
            $i = -0;
            //use PDO fetch() to retrieve the results from the database using a while loop
            //use a while loop to loop through the rows
            while ($data = $stmt->fetch()) {
                //write the database contents to the results array for sending back the view
                $result[$i]['brand'] = $data['brand'];
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['x3dModelData'] = $data['x3dModelData'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                //increment the row index
                $i++;
            }
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
            echo json_encode($result);
        }
        //close the database connection
        $this->handle = NULL;
        //send the response back to the view
        return $result;
    }
    public function dbDrinkDetails()
    {
        //
    }
}
