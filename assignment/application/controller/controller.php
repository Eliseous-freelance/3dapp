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
        $this->load = new Load();
        if ($pageID == "home"){
            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/application/db/infoData.db");
            $this->model->dbCreateDrinkDetailsTable();

            $fantaText = "We're all born playful creatures. But the older we become, the less permission we give
                      ourselves to be playful and we can easily feel burnt out or overwhelmed. All this seriousness, we call it
                      the 'Grey'.
                      But we can always fight back the 'Grey'. How? By taking inspiration from the ones who stayed spontaneous
                      and playful. The ones who bring colour to the world every day. The Colourful People.
                      With our new campaign, Fanta wants to celebrate these Colourful People and reignite that spirit into
                      people from all ages. So grab a Fanta and come play colourful with us.";
            $costaText = "The Costa Coffee story began back in 1971 when Sergio and Bruno arrived in London with a burning desire to make great tasting coffee a part of everyday life Setting up a small roastery in Fenchurch Street, they committed to crafting the finest quality coffee. It was here the Costa brothers blind-tested 112 variations of coffee before they tasted one good enough to be our signature blend. They named it ‘Mocha Italia’ and it remains our signature blend to this day.";
            $cokeText = "In 1886 in New York Harbour, workers were constructing the Statue of Liberty. Eight
              hundred miles away, another great American symbol was about to be unveiled. Like many people who change
              history, John Stith Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he
              stirred up a fragrant, caramel-coloured liquid and, when it was done ... booyah! He had invented Coca
              Cola.";
            $spriteText = "First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's
              leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero,
              part of Coca Cola's no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar
              or calories.";

            $this->model->dbInsertDrinkDetails(3, "Costa", $costaText, "assets/images/homepage/costa.png");
            $costaDescriptionData = $this->apiGetInfo($this->model->dbGetDrinkDetails(3));
            $this->model->dbInsertDrinkDetails(1, "Coca Cola", $cokeText, "assets/images/homepage/coca_cola.jpg");
            $cokeDescriptionData = $this->apiGetInfo($this->model->dbGetDrinkDetails(1));
            $this->model->dbInsertDrinkDetails(2, "Sprite", $spriteText, "assets/images/homepage/sprite.jpg");
            $spriteDescriptionData = $this->apiGetInfo($this->model->dbGetDrinkDetails(2));
            $this->model->dbInsertDrinkDetails(4, "Fanta", $fantaText, "assets/images/homepage/fanta.png");
            $fantaDescriptionData = $this->apiGetInfo($this->model->dbGetDrinkDetails(4));

            $viewData = ["fantaDescriptionData" => $fantaDescriptionData,"cokeDescriptionData" => $cokeDescriptionData,"spriteDescriptionData" => $spriteDescriptionData,"costaDescriptionData"=>$costaDescriptionData];
            $handover = ["handover"=>$viewData];
            $this->load->view($pageID, $handover);
            $this->model->closeConnection();
        }
        else if ($pageID == "Coca Cola"){
            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/application/db/modelData.db");
            $this->model->dbCreateModelTable();
            $this->model->dbInsertModelData(1, "Blender","Coca Cola", "assets/images/textures/can_texture.jpeg", "lala", "assets/images/3d_models/coke_bottle.x3d");
            $cokeModelData = $this->apiGetInfo($this->model->dbGetModelData(1));

            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/application/db/gallery.db");
            $this->model->dbCreateGalleryTable();
            $this->model->dbInsertGalleryData(1, "3D Image Gallery", "These 3D images of the Fanta can, Coke bottle, Sprite bottle and Costa Coffee cup are rendered using Blender", "3D images of models rendered in Blender", "gallery/assets/images/", "js/models_animation/animations.js", "gallery/gallery_generator.js");
            $cokeGalleryData = $this->apiGetInfo($this->model->dbGetGalleryData(1));
            $viewData = ["cokeModelData" => $cokeModelData, "galleryData" => $cokeGalleryData];
            $modelHandover = ["handover"=>$viewData];
            $this->load->view($pageID, $modelHandover);
            $this->model->closeConnection();
        }
        else if ($pageID == "Sprite"){
            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/application/db/modelData.db");
            $this->model->dbCreateModelTable();
            $this->model->dbInsertModelData(2, "Blender", "Sprite", "lala", "lala", "assets/images/3d_models/spriteBottle.x3d");
            $spriteModelData = $this->apiGetInfo($this->model->dbGetModelData(2));

            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/application/db/gallery.db");
            $this->model->dbCreateGalleryTable();
            $this->model->dbInsertGalleryData(2, "3D Image Gallery", "These 3D images of the Fanta can, Coke bottle, Sprite bottle and Costa Coffee cup are rendered using Blender", "3D images of models rendered in Blender", "gallery/assets/images/sprite.jpg", "js/models_animation/animations.js", "gallery/gallery_generator.js");
            $spriteGalleryData = $this->apiGetInfo($this->model->dbGetGalleryData(2));

            $viewData = ["spriteModelData" => $spriteModelData, "galleryData" => $spriteGalleryData];
            $modelHandover = ["handover"=>$viewData];
            $this->load->view($pageID, $modelHandover);
            $this->model->closeConnection();
        }
        else if ($pageID == "Fanta"){
            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/application/db/modelData.db");
            $this->model->dbCreateModelTable();
            $this->model->dbInsertModelData(4, "Blender", "Fanta", "lala", "lala" , "assets/images/3d_models/fanta_can.x3d");
            $fantaModelData = $this->apiGetInfo($this->model->dbGetModelData(4));

            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/application/db/gallery.db");
            $this->model->dbCreateGalleryTable();
            $this->model->dbInsertGalleryData(4, "3D Image Gallery", "These 3D images of the Fanta can, Coke bottle, Sprite bottle and Costa Coffee cup are rendered using Blender", "3D images of models rendered in Blender", "gallery/assets/images/fanta.png", "js/models_animation/animations.js", "gallery/gallery_generator.js");
            $fantaGalleryData = $this->apiGetInfo($this->model->dbGetGalleryData(4));
            $viewData = ["fantaModelData" => $fantaModelData, "galleryData" => $fantaGalleryData];
            $modelHandover = ["handover"=>$viewData];
            $this->load->view($pageID, $modelHandover);
            $this->model->closeConnection();
        }
        else if ($pageID == "Costa"){
            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/application/db/modelData.db");
            $this->model->dbCreateModelTable();
            $this->model->dbInsertModelData(3, "Blender","Costa", "lala", "lala", "assets/images/3d_models/costaCup.x3d");
            $costaModelData = $this->apiGetInfo($this->model->dbGetModelData(3));

            $this->model = new Model("sqlite:/its/home/ed385/public_html/3dapp/assignment/application/db/gallery.db");
            $this->model->dbCreateGalleryTable();
            $this->model->dbInsertGalleryData(3, "3D Image Gallery", "These 3D images of the Fanta can, Coke bottle, Sprite bottle and Costa Coffee cup are rendered using Blender", "3D images of models rendered in Blender", "gallery/assets/images/costa.png", "js/models_animation/animations.js", "gallery/gallery_generator.js");
            $costaGalleryData = $this->apiGetInfo($this->model->dbGetGalleryData(3));
            $viewData = ["costaModelData" => $costaModelData, "galleryData" => $costaGalleryData];
            $modelHandover = ["handover"=>$viewData];
            $this->load->view($pageID, $modelHandover);
            $this->model->closeConnection();
        }
        else if ($pageID == "about"){
            $this->load->view($pageID);
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
