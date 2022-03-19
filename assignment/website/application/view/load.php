<?php
/**
 * load class that allows pages to be viewed
 */
class Load{
    /**
     * allows to load a file 
     */
    function view($file_name, $data=null){
        //check if the file contains data
        if(is_array($data)){
            extract($data);
        }
        //concatenate the view file with .php extension to include the view
        include $file_name.'.php';
    }
}
?>