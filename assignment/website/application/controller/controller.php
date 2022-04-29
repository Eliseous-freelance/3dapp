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

        if ($pageID == 'home'){
            $this->model = new Model('sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/infoData.db');

            $pepperPath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/dr_pepper.jpg";
            $fantaPath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/fanta.png";
            $cokePath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/coca_cola.jpg";
            $spritePath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/sprite.jpg";

            $pepperDescriptionData = $this->apiGetInfo($model_function=$this->model->dbGetDrinkDetails());
            $fantaDescriptionData = $this->apiGetInfo($model_function=$this->model->dbGetDrinkDetails());
            $cokeDescriptionData = $this->apiGetInfo($model_function=$this->model->dbGetDrinkDetails());
            $spriteDescriptionData = $this->apiGetInfo($model_function=$this->model->dbGetDrinkDetails());
            $this->load->view($fileName=$fantaPath, $fantaDescriptionData);
            $this->load->view($fileName=$cokePath, $cokeDescriptionData);
            $this->load->view($fileName=$spritePath, $spriteDescriptionData);
            $this->load->view($fileName=$pepperPath, $pepperDescriptionData);
        }
        else if ($pageID == 'coke'){
            $cokePath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/coca_cola.jpg";
            $this->model = new Model('sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/modelData.db');

            $pepperModelData = $this->apiGetInfo($model_function=$this->model->dbGetModelData());
            $this->load->view($fileName=$cokePath, $data=$pepperModelData);
        }
        else if ($pageID == 'sprite'){
            $spritePath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/sprite.jpg";
            $this->model = new Model('sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/modelData.db');
            $pepperModelData = $this->apiGetInfo($model_function=$this->model->dbGetModelData());
            $this->load->view($fileName=$spritePath, $data=$pepperModelData);
        }
        else if ($pageID == 'fanta'){
            $fantaPath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/fanta.png";
            $this->model = new Model('sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/modelData.db');
            $pepperModelData = $this->apiGetInfo($model_function=$this->model->dbGetModelData());
            $this->load->view($fileName=$fantaPath, $data=$pepperModelData);
        }
        else if ($pageID == 'pepper'){
            $pepperPath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/dr_pepper.jpg";
            $this->model = new Model('sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/modelData.db');
            $pepperModelData = $this->apiGetInfo($model_function=$this->model->dbGetModelData());
            $this->load->view($fileName=$pepperPath, $data=$pepperModelData);
        }
        else{
            echo "error in controller constructor. Wrong call id";
        }
    }

    /**
     * @param $model_function
     * @return mixed
     */
    function apiGetInfo($model_function)
    {
        //get data from the defined model method
        $data = $model_function;
        return $data;
    }


}
