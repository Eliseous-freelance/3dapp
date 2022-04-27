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
            $pepperPath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/dr_pepper.jpg";
            $fantaPath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/fanta.png";
            $cokePath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/coca_cola.jpg";
            $spritePath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/sprite.jpg";
            $this->model->dbInsertDrinkDetails($title='Dr Pepper', $text=$pepperText, $imagePath=$pepperPath);
            $this->model->dbInsertDrinkDetails($title='Coca Cola', $text=$cokeText, $cokePath);
            $this->model->dbInsertDrinkDetails($title='Sprite', $text=$spriteText, $spritePath);
            $this->model->dbInsertDrinkDetails($title='Fanta', $text=$fantaText, $fantaPath);
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
            $this->model->dbCreateModelTable();
            $this->model->dbInsertModelData($ID=1, $x3dCreationMethod='Blender', $modelTitle='Coca Cola', $modelSubtitle='', $modelDescription='$pepperModelDescription');
            $pepperModelData = $this->apiGetInfo($model_function=$this->model->dbGetModelData());
            $this->load->view($fileName=$cokePath, $data=$pepperModelData);
        }
        else if ($pageID == 'sprite'){
            $spritePath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/sprite.jpg";
            $this->model = new Model('sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/modelData.db');
            $this->model->dbCreateModelTable();
            $this->model->dbInsertModelData($ID=2, $x3dCreationMethod='Blender', $modelTitle='Sprite', $modelSubtitle='', $modelDescription='$pepperModelDescription');
            $pepperModelData = $this->apiGetInfo($model_function=$this->model->dbGetModelData());
            $this->load->view($fileName=$spritePath, $data=$pepperModelData);
        }
        else if ($pageID == 'fanta'){
            $fantaPath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/fanta.png";
            $this->model = new Model('sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/modelData.db');
            $this->model->dbCreateModelTable();
            $this->model->dbInsertModelData($ID=4, $x3dCreationMethod='Blender', $modelTitle='Fanta', $modelSubtitle='', $modelDescription='$pepperModelDescription');
            $pepperModelData = $this->apiGetInfo($model_function=$this->model->dbGetModelData());
            $this->load->view($fileName=$fantaPath, $data=$pepperModelData);
        }
        else if ($pageID == 'pepper'){
            $pepperPath = "/its/home/ed385/public_html/3dapp/assignment/website/assets/images/homepage/dr_pepper.jpg";
            $this->model = new Model('sqlite:/its/home/ed385/public_html/3dapp/assignment/website/application/db/modelData.db');
            $this->model->dbCreateModelTable();
            $this->model->dbInsertModelData($ID=3, $x3dCreationMethod='Blender', $modelTitle='Pepper', $modelSubtitle='', $modelDescription='$pepperModelDescription');
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
