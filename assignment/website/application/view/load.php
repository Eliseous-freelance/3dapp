<?php
///**
// * load class that allows pages to be viewed
// */
//class Load{
//    /**
//     * allows to load a file
//     */
//    function view($pageID, $data){
//        //check if the file contains data
//        if(is_array($data)){
//            if ($database == 'infoData'){
//                array_push($data, $pageID);
//                echo json_encode($data);
//
////                echo $data['title'];
////                echo $data['description'];
////                echo $data['imagePath'];
////                includeFile()
////                include_once '/its/home/ed385/public_html/3dapp/assignment/website/js/displayData.js';
//            }
//            elseif($database == 'Model_3D'){
////                echo $data['creationMethod'];
////                echo $data['modelTitle'];
////                echo $data['modelSubtitle'];
////                echo $data['modelDescription'];
//                json_encode($data);
////                include_once '/its/home/ed385/public_html/3dapp/assignment/website/js/displayData.js';
//            }
//            else{
//                echo "wrong database";
//            }
//        }
////        function includeFile(){
////            include '/its/home/ed385/public_html/3dapp/assignment/website/js/displayData.js';
////        }
//    }
//
//    return $filename."php".
//}
?>

<?php
class Load{
    //defaults to constructor as no specific constructor is defined
    function view($file_name, $data=null){
        //check for data
        if(is_array($data)){
            extract($data);
        }
        //cincatemat the view file with .php extension to incllude the view as a php file
        include '/its/home/ed385/public_html/3dapp/assignment/website/application/view/viewDrinksPages/'.$file_name.'.php';
    }
}
?>
