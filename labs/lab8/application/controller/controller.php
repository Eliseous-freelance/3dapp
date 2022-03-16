<?php
//include './debug/ChromePhp.php';
//ChromePhp::log('controller.php: Hello World');
//ChromePhp::log($_SERVER);

//Create the controller class for the MVC design pattern
class Controller {

    //declare public variables for the controller class
    public $load;
    public $model;

    //Create functions for the controller class
    function __construct($pageURI = null){
        //Create new objcets for Load and Model
        $this->load = new Load();
        $this->model = new Model();
        //Determine what page you are on
        $this->$pageURI();
    }

    function home(){
        //get data from the defined model method - model3D_info()
        $data = $this->model->model3D_info();
        //tell the loader what view to load and which dat to use
        $this->load->view('view3DAppTest_2', $data);
    }
     function apiCreateTable(){
        //echo "Create table function";
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage', $data);
    }
    public function apiInsertData(){
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', $data);
        
    }
    public function apiGetData(){
        echo "Data retrieval function";
        $data = $this->model->dbGetData();
        $this->load->view('view3DAppData', $data);
    }

    //New methods for part C of Lab 7 tutorial, which use AJAX
    //Flickr API
    function apiGetFlickrService(){
        $this->load->view('viewFlickrService');
    }

    //API call to read JSON data from a JSON file
    function apiGetJson(){
        $this->load->view('viewJson');
    }

    
    //API call to select 3D images
    function apiLoadImage(){
        //get the brand data from the (this) Model using the dbGetbrand() meyhod in this Model class
        //ChromePhp::warn('controller.php: [apiLoadImage] Get the Brand data');
        $data = $this->model->dbGetBrand();
        //note, the view Drinks.php view being loaded here calls a new model
        //called modelDrinkDetails.php, which is not part of the Model class
        //it is a separate model illustrating that you can have many models
        //ChromePhp::log($data);
        $this->load->view('viewDrinks', $data);
    }
}
?>