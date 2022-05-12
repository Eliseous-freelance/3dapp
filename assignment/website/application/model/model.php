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
        $this->handle = $this->connectDB($this->dsn);
        $this->result = null;
    }

    public function connectDB($dsn){
        try {
            //Change connection string for different databases, currently using SQLite
            $this->handle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
            $this->handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Database connection created \n";
            return $this->handle;
        } catch (PDOEXception $e) {
            echo "I can't connect to the database! D: \n";
            print new Exception($e->getMessage()."\n");
        }
    }

    public function dbCreateModelTable()
    {
        try {
            $this->handle->exec("DROP TABLE IF EXISTS Model_3D;");
            $this->handle->exec("CREATE TABLE IF NOT EXISTS Model_3D (ID INTEGER PRIMARY KEY, creationMethod TEXT NOT NULL, modelTitle TEXT NOT NULL, modelSubtitle TEXT NOT NULL,  modelDescription TEXT NOT NULL, modelPath TEXT NOT NULL);");
            echo "Model_3D table is successfully created inside infoData.db file \n";
        } catch (PDOException $e) {
            print new Exception($e->getMessage()."\n");
        }
    }

    public function dbCreateDrinkDetailsTable()
    {
        try {
            $this->handle->exec("DROP TABLE IF EXISTS DrinkDetails;");
            $this->handle->exec("CREATE TABLE IF NOT EXISTS DrinkDetails (ID INTEGER PRIMARY KEY, title TEXT NOT NULL, description TEXT NOT NULL, imagePath TEXT NOT NULL);");
            echo "drink details table is successfully created inside infoData.db file \n";
        } catch (PDOException $e) {
            print new Exception($e->getMessage()."\n");
        }
        //$this->handle = NULL;
    }

    public function dbInsertModelData($ID, $creationMethod, $modelTitle, $modelSubtitle, $modelDescription, $modelPath)
    {
        try {

            echo "Data insertion function \n";
            $this->handle->exec("INSERT INTO Model_3D (ID, creationMethod, modelTitle, modelSubstitle, modelDescription, modelPath) VALUES (\"$ID\", \"$creationMethod\", \"$modelTitle\", \"$modelSubtitle\", \"$modelDescription\", \"$modelPath\");");
            echo "Model data is inserted successfully inside modelData.db \n";
        } catch (PDOException $e) {
            print new Exception($e->getMessage()."\n");
        }
    }

    public function dbInsertDrinkDetails($ID, $title, $description, $imagePath)
    {
        $blarg = "";
        try {
            echo "Data insertion function \n";
            $this->handle->exec("INSERT INTO DrinkDetails (ID, title, description, imagePath) VALUES (\"$ID\", \"$title\", \"$description\", \"$imagePath\");");
            echo "Model data is inserted successfully inside infoData.db \n";
        } catch (PDOException $e) {
            print new Exception($e->getMessage()."\n");
        }
    }

    public function dbGetModelData()
    {
        echo "Data retrieval function \n";
        try {
            //prepare a statement to get all records from the Model_3D table
            $sql = 'SELECT * FROM Model_3D';
            //use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->handle->query($sql);

            //user up an array to return the results to the view
            $result = null;
            //set up a variable to index each row of the array
            $i = -0;
            
            //use a while loop to loop through the rows
            while ($data = $stmt->fetch()) {
                $result[$i]['creationMethod'] = $data['creationMethod'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                //increment the row index
                $i++;
            }
        } catch (PDOException $e) {
            print new Exception($e->getMessage()."\n");
            echo json_encode($result);
        }
        //close the database connection
        //send the response back to the view
        return $result;
    }

    public function dbGetDrinkDetails($id){
        {
            echo "Data retrieval function \n";
            try {
                //prepare a statement to get all records from the drinkDetails table
                $sql = 'SELECT * FROM DrinkDetails WHERE ID = '.$id.'';
                //use PDO query() to query the database with the prepared SQL statement
                $stmt = $this->handle->query($sql);

                //user up an array to return the results to the view
                $result = null;
                //set up a variable to index each row of the array
                $i = -0;
                
                //use a while loop to loop through the rows
                while ($data = $stmt->fetch()) {
                    $result['title'] = $data['title'];
                    $result['description'] = $data['description'];
                    $result['imagePath'] = $data['imagePath'];
                    //increment the row index
                    $i++;
                }
                $this->setResult($result);
            } catch (PDOException $e) {
                print new Exception($e->getMessage()."\n");
                echo json_encode($result);
            }
            //close the database connection
//            $this->handle = $this->handle = null;
            //send the response back to the view
            return $result;
        }
    }

    public function setResult($result){
        $this->result = $result;
    }

    public function getResult(){
        return $this->result;
    }

}
