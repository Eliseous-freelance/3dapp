<?php
$directory = './'; //stores the image path/folder name in relation to your gallery web space. In this particular example, if hook.php were in the /gallery root folder, your images would be placed in /gallery/assets/images/. We can see that the ../ takes us up a directory level to the assets and scripts folder level, we then dive down into the assets/images folder to find the image files.
//Only load files with the following extensions.
$allowed_extensions=array('jpg', 'jpeg', 'gif', 'png'); //stores an array of allowed file extensions. We want to identify only the image files in a directory so that any other file formats will be ignored by the gallery’s hook.php file. You will be able to test this feature by adding junk files (e.g. a blank .txt file).
//Used to separate the extentions from each file.
$file_parts = array(); //variable used to verify whether a file path has a valid image extension. This array splits the filename using the dot. For example, image.png will be stored in the array as {“image”,”png”}. The last element in the array will always be the extension.
//response message.
$response = ""; //will store the server-side reply in the form of a string.
//opens the directory to parse the images.
$dir_handle = @opendir($directory); //— this is a very important PHP object that opens a directory handle to run a script to parse the image folder’s contents. It is paired with the closedir().
//Iterate through all the files.
$i=0;
while($file = readdir($dir_handle)){
    //first check for hidden files
    if(substr($file, 0, 1) != '.'){
        //Split the file name to extract the file extensions.
        $file_components = explode('.', $file);
        //Grab the extension token.
        $extension = strtolower(array_pop($file_components));
        //Is the file a valid image. if so, add it to the response.
        if(in_array($extension,$allowed_extensions)){
            //build response string using the ~ symbol as a string separator.
            $response .= $directory.'/'.$file.'~';
            $i++;
        }
    }
}
closedir($dir_handle); //response should like: ../assets/images/coke_can_tn.png~../assets/images/coke_top_tn.png~../assets/images/dr_pepper_top_tn.png~../assets/images/sprite_top_tn.png
//return response while removing the last ~ separator
echo substr_replace($response, "", -1);

?>