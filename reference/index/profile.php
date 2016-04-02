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


<!-- nav bar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- end of nav bar -->

<body onload="init();">
  
<div class="container">
<div class="row">
  <div class="col-xs-12 col-md-2">
    <img src="test.JPG" alt="..." class="img-thumbnail" style="width:150px;height:150px">
    <h3>
    Name: Yi Lu
    </h3>
  </div>
  <div class="col-xs-12 col-md-10">
  <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Main Problem</h3>
        </div>
           <div class="panel-body">
                  <p>...</p>
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">Answer</h3>
                  </div>
                  <div class="panel-body">
                      <p>...</p>
                  </div>
                </div>
                <div class="input-group">
                      <input type="text" class="form-control" placeholder="Quick answer...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Reply</button>
                      </span>
                </div>
            </div>
      </div>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Main Problem</h3>
            </div>
               <div class="panel-body">
                      <p>...</p>
                    <div class="panel panel-success">
                      <div class="panel-heading">
                        <h3 class="panel-title">Answer</h3>
                      </div>
                      <div class="panel-body">
                          <p>...</p>
                      </div>
                    </div>
                    <div class="input-group">
                          <input type="text" class="form-control" placeholder="Quick answer...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Reply</button>
                          </span>
                    </div>
                </div>
      </div>
  </div>
</div>

</div>

</body>



<?php

?>