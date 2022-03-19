<?php
include '../debug/ChromePhp.php'; //includes the ChromePhp debuugging tool 
ChromePhp::log('controller.php: controlling');
ChromePhp::log($_SERVER);

/**
 * 
 */
class Controller
{
    public $load; //load object
    public $model; //model object

    /**
     * constructor
     */
    function __construct($pageURI = null)
    {
        //Create new Load and Model objcets
        $this->load = new Load();
        $this->model = new Model('sqlite:../db/data.db');
        //This determines the current page
        $this->$pageURI();
    }
    /**
     * 
     */
    function controlPage($model_function, $fileName)
    {
        //get the brand data from the (this) Model using the dbGetbrand() meyhod in this Model class
        ChromePhp::warn('controller.php: [apiLoadImage] Get the Brand data');
        //get data from the defined model method
        $data = $this->model->$model_function; //model3D_info(), dbCreateTable(), dbInsertData(), dbGetData(), dbGetBrand()
        
        ChromePhp::log($data);
        //tell the loader what view to load and which dat to use
        $this->load->view($fileName, $data);
    }
}
