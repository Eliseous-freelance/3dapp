<?php
class Model{
    //Property declaration, in this case we are declaring a variable or handler that points to the database connection, this will become a PDO object
    public $dbhandle;

    //Method to crearte databse connection using PHP Data Objects (PDO) as the interface to SQLite
    public function __construct(){
        //Set up the database source name (DSN)
        $dsn = 'sqlite:./db/test1.db';

        //then create a connection to a database with the PDO() function 
        try{
            //Change connection string for different databses, currently using SQLite
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                                                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                    PDO::ATTR_EMULATE_PREPARES => false,
            ));
            //$this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCETION);
            //echo 'Database connection create</br></br>';
        }
        catch (PDOEXception $e){
            echo "I'm sorry. Martin. I'm afraid I can't connect to the database!";
            //generate an error message if the connection fails
            print new Exception($e->getMessage());
        }
    }
    public function dbCreateTable(){
        echo "Create table function";
        try{
            $this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
            return "Model_3D table is successfully created inside test1.db file";
        }
        catch (PDOException $e){
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    public function dbInsertData(){
        echo "Daba insertion function";
        try{
            $this->dbhandle->exec("INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubstitle, modelSubtitle)
                                    VALUES (1, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');".
                                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubstitle, modelSubtitle)
                                    VALUES (2, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');".
                                "INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubstitle, modelSubtitle)
                                    VALUES (3, 'string_1', 'string_2', 'string_3', 'string_4', 'string_5');");
                                return "X3D model data is inserted successfully inside test1.db";
        }
        catch (PDOException $e){
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    public function dbGetData(){
        echo "Data retrieval function";
        try{
            //prepare a statement to get all records from the Model_3D table
            $sql = 'SELECT * FROM Model_3D';
            //use PDO query() to query the database with the prepared SQL sstatement
            $stmt = $this->dbhandle->query($sql);
            //user up an array to return the results to the view
            $result = null;
            //set up a variable to index each row of the array
            $i=-0;
            //use PDO fetch() to retrieve the results from the database using a while loop
            //use a while loop to loop through the rows
            while ($data = $stmt->fetch()){
                //don't worry about this, it's just a simple teest to check we can output a value from the database in a while loop
                //echo '</br>'.$data['x3dModelTitle'];
                //write the database contents to the results array for sending back the view
                $result[$i]['x3dModelTitle'] = $data['x3dModeldata'];
                $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                //increment the row index
                $i++;
            }
        }
        catch (PDOException $e){
            print new Exception($e->getMessage());
        }
        //close the database connection
        $this->dbhandle = NULL;
        //send the response back to the view
        return $result;
    }
    public function dbDrinkDetails(){
        //
    }

    public function dbGetBrand(){
        //return the Brand Names
        return array("_", "Coke", "Coke Light", "Coke Zero", "Sprite", "Dr Pepper", "Fanta");
    }
}
?>