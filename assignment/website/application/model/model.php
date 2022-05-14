<?php

/**
 *
 */
class Model
{
    public $handle;
    public $dsn;

    /**
     * constructor to create database connection using PHP Data Objects (PDO) as the interface to SQLite
     */
    public function __construct($dsn)
    {
        $this->dsn = $dsn;
        $this->handle = $this->connectDB($this->dsn);
        $this->result = null;
    }

    public function connectDB($dsn){
        try {
            $this->handle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
            $this->handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->handle;
        } catch (PDOEXception $e) {
            print new Exception($e->getMessage()."\n");
        }
    }

    public function dbCreateModelTable()
    {
        try {
            $this->handle->exec("DROP TABLE IF EXISTS Model_3D;");
            $this->handle->exec("CREATE TABLE IF NOT EXISTS Model_3D (ID INTEGER PRIMARY KEY, creationMethod TEXT NOT NULL, modelTitle TEXT NOT NULL, modelTexture TEXT NOT NULL,  modelDescription TEXT NOT NULL, modelPath TEXT NOT NULL);");
        } catch (PDOException $e) {
            print new Exception($e->getMessage()."\n");
        }
    }

    public function dbCreateDrinkDetailsTable()
    {
        try {
            $this->handle->exec("DROP TABLE IF EXISTS DrinkDetails;");
            $this->handle->exec("CREATE TABLE IF NOT EXISTS DrinkDetails (ID INTEGER PRIMARY KEY, title TEXT NOT NULL, description TEXT NOT NULL, imagePath TEXT NOT NULL);");
        } catch (PDOException $e) {
            print new Exception($e->getMessage()."\n");
        }
    }

    public function dbCreateGalleryTable()
    {
        try {
            $this->handle->exec("DROP TABLE IF EXISTS Gallery;");
            $this->handle->exec("CREATE TABLE IF NOT EXISTS Gallery (ID INTEGER PRIMARY KEY, galleryTitle TEXT NOT NULL, carouselText TEXT NOT NULL, galleryText TEXT NOT NULL, imagePath TEXT NOT NULL);");
        } catch (PDOException $e) {
            print new Exception($e->getMessage()."\n");
        }
    }

    public function dbInsertModelData($ID, $creationMethod, $modelTitle, $modelTexture, $modelDescription, $modelPath)
    {
        try {
            $this->handle->exec("INSERT INTO Model_3D (ID, creationMethod, modelTitle, modelTexture, modelDescription, modelPath) VALUES (\"$ID\", \"$creationMethod\", \"$modelTitle\", \"$modelTexture\", \"$modelDescription\", \"$modelPath\");");
        } catch (PDOException $e) {
            print new Exception($e->getMessage()."\n");
        }
    }

    public function dbInsertDrinkDetails($ID, $title, $description, $imagePath)
    {
        try {
            $this->handle->exec("INSERT INTO DrinkDetails (ID, title, description, imagePath) VALUES (\"$ID\", \"$title\", \"$description\", \"$imagePath\");");
        } catch (PDOException $e) {
            print new Exception($e->getMessage()."\n");
        }
    }

    public function dbInsertGalleryData($ID, $galleryTitle, $carouselText, $galleryText, $imagePath)
    {
        try {
            $this->handle->exec("INSERT INTO Gallery (ID, galleryTitle, carouselText, galleryText, imagePath) VALUES (\"$ID\", \"galleryTitle\", \"$carouselText\", \"$galleryText\", \"$imagePath\");");
        } catch (PDOException $e) {
            print new Exception($e->getMessage()."\n");
        }
    }

    public function dbGetModelData($id)
    {
        try {
            $sql = 'SELECT * FROM Model_3D WHERE ID = '.$id.'';
            $stmt = $this->handle->query($sql);
            $result = null;
            $i = -0;

            while ($data = $stmt->fetch()) {
                $result['creationMethod'] = $data['creationMethod'];
                $result['modelTitle'] = $data['modelTitle'];
                $result['modelTexture'] = $data['modelTexture'];
                $result['modelDescription'] = $data['modelDescription'];
                $result['modelPath'] = $data['modelPath'];
                $i++;
            }
        } catch (PDOException $e) {
            print new Exception($e->getMessage()."\n");
            echo json_encode($result);
        }
        return $result;
    }

    public function dbGetDrinkDetails($id){
        {
            try {
                $sql = 'SELECT * FROM DrinkDetails WHERE ID = '.$id.'';
                $stmt = $this->handle->query($sql);
                $result = null;
                $i = -0;
                while ($data = $stmt->fetch()) {
                    $result['title'] = $data['title'];
                    $result['description'] = $data['description'];
                    $result['imagePath'] = $data['imagePath'];
                    $i++;
                }
                $this->setResult($result);
            } catch (PDOException $e) {
                print new Exception($e->getMessage()."\n");
                echo json_encode($result);
            }
            return $result;
        }
    }

    public function dbGetGalleryData($id){
        {
            try {
                $sql = 'SELECT * FROM Gallery WHERE ID = '.$id.'';
                $stmt = $this->handle->query($sql);
                $result = null;
                $i = -0;
                while ($data = $stmt->fetch()) {
                    $result['galleryTitle'] = $data['galleryTitle'];
                    $result['carouselText'] = $data['carouselText'];
                    $result['galleryText'] = $data['galleryText'];
                    $result['imagePath'] = $data['imagePath'];
                    $i++;
                }
                $this->setResult($result);
            } catch (PDOException $e) {
                print new Exception($e->getMessage()."\n");
                echo json_encode($result);
            }
            return $result;
        }
    }

    public function setResult($result){
        $this->result = $result;
    }

    public function closeConnection(){
        $this->handle = NULL;
    }

}
