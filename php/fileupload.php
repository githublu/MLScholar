<?php
$target_dir = "../upload/";
    foreach($_FILES as $file)
    {
		$target_file = $target_dir . basename($file["name"]);
		$uploadOk = 1;
		$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
		    // $check = getimagesize($file["tmp_name"]);
		    // if($check !== false) {
		    //     echo "File is an image - " . $check["mime"] . ".";
		    //     $uploadOk = 1;
		    // } else {
		    //     echo "File is not an image.";
		    //     $uploadOk = 0;
		    // }
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Existed - ";
		    $uploadOk = 0;
		}
		// Check file size
		if ($file["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($fileType != "csv" && $fileType != "xls" && $fileType != "xlsx"
		&& $fileType != "tsv" ) {
		    echo "Nnly CSV, XLS, XLSX, TSV files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($file["tmp_name"], $target_file)) {
		        echo "The file ". basename( $file["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
    }
?>