<?php
class Load{
    public function view($file_name, $data=null){
        if(is_array($data)){
            extract($data);
        }
        if ($file_name == "Coca Cola" || $file_name == "Sprite" || $file_name == "Fanta" || $file_name == "Dr Pepper") {
            $file_name = "gallery";
            include '/its/home/ed385/public_html/3dapp/assignment/website/application/view/viewDrinksPages/' . $file_name . '.php';
        }
        else if($file_name == "about" || $file_name == "home"){
            include '/its/home/ed385/public_html/3dapp/assignment/website/application/view/viewDrinksPages/' . $file_name . '.php';
        }
    }
}
?>