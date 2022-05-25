<?php require_once("config.php"); //connection file
class FileManager{
  function __construct() {
    $this->basePath=PRODUCTS_PATH . "/IMAGES/";
    $this->smallPath=$this->basePath . "small" . "/";
    $this->bigPath=$this->basePath . "big" . "/";
    $this->maxSize=2000000;
  }
  function uploadfile($myfile, $destFolder){
    $target_file = $destFolder . basename($myfile["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    
    // Check if image file is a actual image
    if (getimagesize($myfile["IMAGES"]) === false) {
      return "File is not an image.";
    }

    // Check file size
    if ($myfile["size"] > $this->maxSize) {
      return "Sorry, your file is too large. " . $myfile["size"];
    }

    if (!move_uploaded_file($myfile["IMAGES"], $target_file)) {
      return "Sorry, there was an error uploading your file.";
    }
    return true;
  }
}
?>