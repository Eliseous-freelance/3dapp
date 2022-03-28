<?php
$directory = 'images';
//Only load files with the following extensions.
$allowed_extensions=array('jpg', 'jpeg', 'gif', 'png');
//Used to separate the extentions from each file.
$file_parts = @opendir($directory);
//response message.
$response = "";
//opens the directory to parse the images.
$dir_handle = @opendir($directory);
//Iterate through all the files.
$i=0;
while($file = readdir($dir_handle)){
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
closedir($dir_handle);
//return response while removing the last ~ separator
echo substr_replace($response, "", -1);
?>