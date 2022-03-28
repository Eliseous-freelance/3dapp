<?php
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
}
?>