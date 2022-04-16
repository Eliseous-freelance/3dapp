<?php
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
    function __construct($pageID)
    {
        //Create new Load and Model objects
        $this->load = new Load();
        $this->model = new Model('sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/data.db');

        if ($pageID == 'home'){

        }
        else if ($pageID == 'coke'){

        }
        else if ($pageID == 'sprite'){

        }
        else if ($pageID == 'fanta'){

        }
        else if ($pageID == 'pepper'){

        }
        else{
            echo "error in controller constructor. Wrong call id";
        }
    }
    /**
     * 
     */
    function controlPage($model_function, $fileName)
    {
        //get the brand data from the (this) Model using the dbGetbrand() method in this Model class
        //get data from the defined model method
        $data = $this->model->$model_function; //model3D_info(), dbCreateTable(), dbInsertData(), dbGetData(), dbGetBrand()

        //tell the loader what view to load and which dat to use
        $this->load->view($fileName, $data);
    }
}
