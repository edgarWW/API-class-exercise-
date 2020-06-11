<<<<<<< HEAD
<<?php

/**
A finction that reads from json filesize
@params
$filepath:The path of json file
=======
<?php

/**
A function that reads from json files

@params
$filePath : The path of the json file
>>>>>>> adb2e3987a01ecba36b888d1378987cef253fdc8

@returns
Array of the contents of the file
*/

<<<<<<< HEAD
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
=======
function kusomaJSON($filePath){
  $contents = file_get_contents($filePath);

  return json_decode($contents,true);
}

/**
A function that reads from CSV files
*/
function kusomaCSV($filePath){
  $contents = file_get_contents($filePath);

  return str_getcsv($contents);
}

/**
A function that reads from KS files
*/
function kusomaKS($filePath){

  $contents = file_get_contents($filePath);
  
  return explode(PHP_EOL,$contents);

}
>>>>>>> adb2e3987a01ecba36b888d1378987cef253fdc8
