<?php
// $target_dir = "./";
// $target_name = basename($_FILES["fileToUpload"]["name"]);
// $target_file = $target_dir . $target_name;
// $uploadOk = 1;
// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// // Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" && $imageFileType != "csv" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//     switch ($imageFileType) {
//         case 'csv':
//                 $csv= file_get_contents($_FILES["fileToUpload"]["tmp_name"]);
//                 $array = array_map("str_getcsv", explode("\n", $csv));
//                 $jsonName = strstr(basename($_FILES["fileToUpload"]["name"]),'.',true).'.json';
//                 if(file_put_contents($jsonName, json_encode($array)))
//                 {
//                     echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
//                 }
//                 else {
//                     echo "Sorry, there was an error uploading your file.";
//                 }
//             break;
        
//         default:
//             break;
//     }

//     // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     //     echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
//     // } else {
//     //     echo "Sorry, there was an error uploading your file.";
//     // }
// }
class State {
    public $name;

    public function __construct($name = '123')
    {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    
}

$sate = new State();
echo ($sate->getName());

$json_input = '
{
    "part1": {
        "t1": 
            ["c1",
            "c2",
            "c3"]
        ,
        "t1": 
            ["c1",
            "c2",
            "c3"]
    },
    "part2": {
        "t1": 
            ["c21",
            "c22",
            "c23"]
        ,
        "t2": 
            ["c21",
            "c22",
            "c23"]
    },
    "relation1": 
            ["p1c1",
        "p2c1"]
        ,
    "part3": {
        "t1": 
            ["c1",
            "c2",
            "c3"]
        ,
        "t1": 
            ["c1",
            "c2",
            "c3"]
    },
    "relation2": 
        ["p1c1",
        "p2c1"]
        ,
    "filter": 
        ["where p1c1 < 0",
        "order by p1c1"
        ]
    
}';
$array = json_decode( $json_input, true );
//print_r($array);

// foreach ($array as $key => $value) { 
// 	if(substr($key, 0, strlen('part')) === 'part')
// 	{
// 		//echo "Part";
// 		//print_r($value);
// 		echo "\n";
// 	}
// 	if(substr($key, 0, strlen('relation')) === 'relation')
// 	{
// 		//echo "relation";
// 		//print_r($value);
// 		echo "\n";
// 	}
// 	if(substr($key, 0, strlen('filter')) === 'filter')
// 	{
// 		//echo "filter";
// 		//print_r($value);
// 		echo "\n";
// 	}
//}

echo "111\n";

//$handle = popen('python D:\xampp\htdocs\python\load_data.py ' . escapeshellarg(json_encode($array)), "r");
// $read = fread($handle, 2096);
// echo ($read);
// pclose($handle);
?>
