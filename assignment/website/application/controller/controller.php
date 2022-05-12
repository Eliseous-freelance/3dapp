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

        if ($pageID == "home"){
            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/infoData.db");
            $this->model->dbCreateDrinkDetailsTable();

            $fantaText = "We're all born playful creatures. But the older we become, the less permission we give
                      ourselves to be playful and we can easily feel burnt out or overwhelmed. All this seriousness, we call it
                      the 'Grey'.
                      But we can always fight back the 'Grey'. How? By taking inspiration from the ones who stayed spontaneous
                      and playful. The ones who bring colour to the world every day. The Colourful People.
                      With our new campaign, Fanta wants to celebrate these Colourful People and reignite that spirit into
                      people from all ages. So grab a Fanta and come play colourful with us.";
            $pepperText = "Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over
              a century amd it's still the same, with that distinctive flavour you just can't quite put your toungue on.
              It was created by Texas pharmacist Charles Alderton in 1885. Hw gave a sample of the first ever batch to
              Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink.
                The distinctive, bold taste of Dr Pepper has been popular ever since.";
            $cokeText = "In 1886 in New York Harbour, workers were constructing the Statue of Liberty. Eight
              hundred miles away, another great American symbol was about to be unveiled. Like many people who change
              history, John Stith Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he
              stirred up a fragrant, caramel-coloured liquid and, when it was done ... booyah! He had invented Coca
              Cola.";
            $spriteText = "First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's
              leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero,
              part of Coca Cola's no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar
              or calories.";
            $pepperPath = "assets/images/homepage/dr_pepper.jpg";
            $fantaPath = "assets/images/homepage/fanta.png";
            $cokePath = "assets/images/homepage/coca_cola.jpg";
            $spritePath = "assets/images/homepage/sprite.jpg";
            $this->model->dbInsertDrinkDetails(3, "Dr Pepper", $pepperText, $pepperPath);
            $pepperDescriptionData = $this->apiGetInfo($this->model->dbGetDrinkDetails(3));
            $this->model->dbInsertDrinkDetails(1, "Coca Cola", $cokeText, $cokePath);
            $cokeDescriptionData = $this->apiGetInfo($this->model->dbGetDrinkDetails(1));
            $this->model->dbInsertDrinkDetails(2, "Sprite", $spriteText, $spritePath);
            $spriteDescriptionData = $this->apiGetInfo($this->model->dbGetDrinkDetails(2));
            $this->model->dbInsertDrinkDetails(4, "Fanta", $fantaText, $fantaPath);
            $fantaDescriptionData = $this->apiGetInfo($this->model->dbGetDrinkDetails(4));




            $viewData = ["fantaDescriptionData" => $fantaDescriptionData,"cokeDescriptionData" => $cokeDescriptionData,"spriteDescriptionData" => $spriteDescriptionData,"pepperDescriptionData"=>$pepperDescriptionData];
            $handover = ["handover"=>$viewData];
            $this->load->view($pageID, $handover);
//            $this->load->view($pageID, $cokeDescriptionData);
//            $this->load->view($pageID, $spriteDescriptionData);
//            $this->load->view($pageID, $pepperDescriptionData);
        }
        else if ($pageID == "coke"){
            $cokePath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/coca_cola.jpg";
            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/modelData.db");
            $this->model->dbCreateModelTable();
            $cokeModelDescription = "lala";
            $this->model->dbInsertModelData(1, "Blender","Coca Cola", "", $cokeModelDescription, $cokePath);
            $database = 'Model_3D';
            $pepperModelData = $this->apiGetInfo($this->model->dbGetModelData());
            $this->load->view($pageID, $pepperModelData, $database);
        }
        else if ($pageID == "sprite"){
            $spritePath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/sprite.jpg";
            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/modelData.db");
            $this->model->dbCreateModelTable();
            $spriteModelDescription = "lala";
            $this->model->dbInsertModelData(2, "Blender", "Sprite", "", $spriteModelDescription, $spritePath);
            $database = 'Model_3D';
            $pepperModelData = $this->apiGetInfo($this->model->dbGetModelData());
            $this->load->view($pageID, $pepperModelData, $database);
        }
        else if ($pageID == "fanta"){
            $fantaPath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/fanta.png";
            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/modelData.db");
            $this->model->dbCreateModelTable();
            $fantaModelDescription = "lala";
            $this->model->dbInsertModelData(4, "Blender", "Fanta", "", $fantaModelDescription , $fantaPath);
            $pepperModelData = $this->apiGetInfo($this->model->dbGetModelData());
            $database = 'Model_3D';
            $this->load->view($pageID, $pepperModelData, $database);
        }
        else if ($pageID == "pepper"){
            $pepperPath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/dr_pepper.jpg";
            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/modelData.db");
            $this->model->dbCreateModelTable();
            $pepperModelDescription = "lala";
            $this->model->dbInsertModelData(3, "Blender","Pepper", "", $pepperModelDescription, $pepperPath);
            $pepperModelData = $this->apiGetInfo($this->model->dbGetModelData());
            $database = 'Model_3D';
            $this->load->view($pageID, $pepperModelData, $database);
        }
        else{
            echo "error in controller constructor. Wrong call id";
        }
    }

    /**
     * @param 
     * @return mixed
     */
    function apiGetInfo($modelFunction)
    {
        //get data from the defined model method
        $data = $modelFunction;
        return $data;
    }


}
