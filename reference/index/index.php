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

<body>
  
<div class="container">
	<div class="panel panel-info">
	  <div class="panel-heading">
	    <h3 class="panel-title">Main problem</h3>
	  </div>
	  <div class="panel-body">
	  	desp1
	    <div class="panel panel-success">
			  <!-- Default panel contents -->
			  <div class="panel-heading">Answers</div>
			  <div class="panel-body">
			    <p>...</p>
			  </div>
			
			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item">Cras justo odio</li>
			    <li class="list-group-item">Dapibus ac facilisis in</li>
			    <li class="list-group-item">Morbi leo risus</li>
			    <li class="list-group-item">Porta ac consectetur ac</li>
			    <li class="list-group-item">Vestibulum at eros</li>
			  </ul>
			</div>
	  </div>
	</div>  
	<div class="panel panel-default">
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
			  </div>

	</div>    
	
	
	<div class="row">
  <div class="col-md-6">    
  	<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
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
                    <div class="btn-group">
                                    <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                            Econ 3010 <span class="caret"></span>
                                    </button>
                                          <ul class="dropdown-menu" role="menu">
                                               <li><a href="#">Action</a></li>
                                               <li><a href="#">Another action</a></li>
                                               <li><a href="#">Something else here</a></li>
                                               <li class="divider"></li>
                                               <li><a href="#">Separated link</a></li>
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
</div>

</div>

</body>
<?php

?>