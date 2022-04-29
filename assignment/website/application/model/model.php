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
     * @param PDO $handle
     */
    public function __construct($dsn)
    {
        //Set up the database source name (DSN)
        $this->dsn = $dsn;
        $this->handle = $this->connectDB($this->dsn);
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
            echo "I can't connect to the database! D:";
            print new Exception($e->getMessage());
        }
    }

    public function dbGetDrinkDetails(){
        {
            try {
                echo "Data retrieval function \n";
                //prepare a statement to get all records from the drinkDetails table
                $sql = "SELECT title FROM DrinkDetails";

                //use PDO query() to query the database with the prepared SQL statement
                $stmt = $this->handle->query($sql);

                //user up an array to return the results to the view
                $result = null;

                //set up a variable to index each row of the array
                $i = 0;
                //use PDO fetch() to retrieve the results from the database using a while loop
                //use a while loop to loop through the rows
                while ($data = $stmt->fetch()) {
                    $result[$i]['title'] = $data['title'];
                    $result[$i]['description'] = $data['description'];
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


    public function dbGetModelData()
    {
        echo "Data retrieval function";
        try {
            //prepare a statement to get all records from the Model_3D table
            $sql = 'SELECT * FROM Model_3D';
            //use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->handle->query($sql);
            $result = null;
            //set up a variable to index each row of the array
            $i = 0;
            //use PDO fetch() to retrieve the results from the database using a while loop
            //use a while loop to loop through the rows
            while ($data = $stmt->fetch()) {
                $result[$i]['title'] = $data['title'];
                $result[$i]['method'] = $data['method'];
                $result[$i]['subtitle'] = $data['subtitle'];
                $result[$i]['description'] = $data['description'];
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
        return $result; //you might want to jseon_encode
    }

}
