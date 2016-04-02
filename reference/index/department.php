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
          <th>Course #</th>
          <th>Course Name</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">ASTR 1230</th>
          <td>
                <div class="btn-group">
                                <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        Intro to Astronomy <span class="caret"></span>
                                </button>
                                      <ul class="dropdown-menu" role="menu">
                                           <li><a href="discussion.php?c=astr1230&&p=1">Prof. A</a></li>
                                           <li><a href="#">Prof. B</a></li>
                                           <li><a href="#">Prof. C</a></li>
                                      </ul>
                </div>
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