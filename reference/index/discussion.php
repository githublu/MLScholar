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
  <div role="tabpanel">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Recent</a></li>
      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Unsolved</a></li>
      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">My questions</a></li>
      <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Hot questions</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
        <div class="panel panel-info">
        	  <div class="panel-heading">
        	    <a href="question.php?id=1" target="_blank"><h3 class="panel-title">Main Problem</h3></a>
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
             <div class="btn-group btn-group-justified" role="group" aria-label="...">
			  <div class="btn-group" role="group">
			    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>   Previous page</button>
			  </div>
			  <div class="btn-group" role="group">
			    <button type="button" class="btn btn-default">Next page   <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
			  </div>
			</div>
      </div>
      <div role="tabpanel" class="tab-pane" id="profile">
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
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
			  <div class="btn-group" role="group">
			    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Previous page</button>
			  </div>
			  <div class="btn-group" role="group">
			    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Next page</button>
			  </div>
			</div>
      </div>
      <div role="tabpanel" class="tab-pane" id="messages">
      </div>
      <div role="tabpanel" class="tab-pane" id="settings">...</div>
    </div>

  </div>



	
	


</div>

</body>
<?php

?>