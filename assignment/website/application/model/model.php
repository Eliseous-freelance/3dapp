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

    public function dbCreateModelTable()
    {
        try {
            $this->handle->exec("
                    CREATE TABLE [IF NOT EXISTS] Model_3D (
                        Id INTEGER PRIMARY KEY, 
                        x3dCreationMethod TEXT NOT NULL, 
                        modelTitle TEXT NOT NULL, 
                        modelSubtitle TEXT NOT NULL, 
                        modelDescription TEXT NOT NULL)");
            return "Model_3D table is successfully created inside infoData.db file";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->handle = NULL;
    }

    public function dbCreateDrinkDetailsTable()
    {
        try {
            $this->handle->exec("
                    CREATE TABLE [IF NOT EXISTS] DrinkDetails (
                        Id INTEGER PRIMARY KEY, 
                        title TEXT, 
                        text TEXT, 
                        imagePath TEXT)");
            return "drink details table is successfully created inside infoData.db file";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->handle = NULL;
    }

    public function dbInsertModelData($ID, $x3dCreationMethod, $modelTitle, $modelSubtitle, $modelDescription)
    {
        echo "Data insertion function";
        try {
            $this->handle->exec("INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubstitle, modelSubtitle)
                                    SELECT $x3dCreationMethod, $modelTitle, $modelSubtitle, $modelDescription 
                                    VALUES ($ID, $x3dCreationMethod, $modelTitle, $modelSubtitle, $modelDescription);
                                    WHERE NOT EXISTS(SELECT $ID FROM Model_3D WHERE Id = $ID AND x3dCreationMethod = $x3dCreationMethod AND modelTitle = $modelTitle AND modelSubtitle = $modelSubtitle AND modelDescription = $modelSubtitle);");



            return "X3D model data is inserted successfully inside modelData.db";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->handle = NULL;
    }

    public function dbInsertDrinkDetails($Id, $title, $text, $imagePath)
    {
        echo "Data insertion function";
        try {
            $this->handle->exec(`INSERT INTO DrinkDetails (Id, title, text, imagePath) VALUES('$Id', '$title', '$text', '$imagePath')`);
//            $this->handle->exec("INSERT INTO drinkDetails (Id, title, text, imagePath)
//                                    SELECT $title, $text, $imagePath
//                                    VALUES ($Id, $title, $text, $imagePath)
//                                    WHERE NOT EXISTS(SELECT $Id FROM drinkDetails WHERE Id = $Id AND title = $title AND text = $text AND imagePath = $imagePath);");
            return "X3D model data is inserted successfully inside test1.db";
        } catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->handle = NULL;
    }
    
    public function dbGetModelData()
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

    public function dbGetDrinkDetails(){
        {
            echo "Data retrieval function";
            try {
                //prepare a statement to get all records from the drinkDetails table
                $sql = 'SELECT * FROM drinkDetails';
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
                    $result[$i]['title'] = $data['title'];
                    $result[$i]['text'] = $data['text'];
                    $result[$i]['imagePath'] = $data['imagePath'];
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
    }

}
