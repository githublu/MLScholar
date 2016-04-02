<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>


<?php
require_once('./library.php');
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

 require "./class/header.php";
 $header = new headtop(); $header->render();
?>

<body>
  
<div class="container">
	<div class="row">
  <div class="col-md-6">    
  	<table class="table table-striped">
      <thead>
        <tr>
          <th>Abrev</th>
          <th>Course Name</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">ASTR</th>
          <td><a href="department.php?c=astr">Astronomy</a></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
        </tr>
      </tbody>
    </table>
    </div>
  <div class="col-md-6"> 
  	   <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>
          Course name
                          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>
            111
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
        </tr>
      </tbody>
    </table>
    </div>
</div>

</div>

</body>
<?php

?>