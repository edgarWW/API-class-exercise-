<<?php

/**
A finction that reads from json filesize
@params
$filepath:The path of json file

@returns
Array of the contents of the file
*/

function kusomaJSON($filepath){
  $contents=file_get_contents($filepath)
  return json_decode($contents,true)

}

/**
a function that reads from CSV
*/
function kusomaCSV($filepath){

}


 ?>
