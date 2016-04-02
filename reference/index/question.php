<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link href="css/question.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>


<?php
require_once('./library.php');
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

 require "./class/header.php";
 $header = new headtop(); $header->render();
?>

<body onload="init();">
  
<div class="container">
	<div class="panel panel-info">
	  <div class="panel-heading">
	    <h3 class="panel-title">Main Problem</h3>
	  </div>
	  	 <div class="panel-body">
			    <p>...</p>
	      </div>
	</div>
	<div class="panel panel-success">
                    <div class="panel-heading">
                      <h3 class="panel-title">Top Answer</h3>
                    </div>
    				<div class="panel-body">
                        <div class="row">
                          <div class="col-xs-10 col-sm-6 col-md-10">
                            <p>...</p>
                          </div>
                          <div class="col-xs-2 col-md-2">
                              <div class="vote">
                                  <button class="up" aria-pressed="false" title="Agree">
                                  <i class="voteup"></i>
                                  <span style="display: inline-block;">Yes</span>
                                  <span class="count" style="display: inline-block;">1</span>
                                  </button>
                                  <button class="down" aria-pressed="false" title="Disagree">

                                  <span style="display: inline-block; width: 100%;">No</span>
                                  <span class="count" style="display: inline-block;">2</span>
                                  <i class="votedown"></i>
                                  </button>
                              </div>
                          </div>
                        </div>

    				</div>

    				<div class="panel-group nmargin" role="tablist">
                        <div class="panel panel-default nborder">
                          <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
                            <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="false" aria-controls="collapseListGroup1">
                                Show all comment
                              </a>
                            </h4>
                          </div>
                          <div id="collapseListGroup1" class="panel-collapse collapse nborder" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="false" style="height: 0px;">
                            <ul class="list-group nmargin">
                              <li class="list-group-item">Bootply</li>
                              <li class="list-group-item">One itmus ac facilin</li>
                              <li class="list-group-item">Second eros</li>
                            </ul>
                                			  <div class="input-group nborder">
                                                    <input type="text" class="form-control" style ="border-top: 0px;border-left: 0px;border-right: 0px;" placeholder="Quick answer...">
                                                    <span class="input-group-btn">
                                                      <button class="btn btn-default" type="button">Reply</button>
                                                    </span>
                                              </div>
                          </div>
                        </div>
                    </div>
    </div>
	<div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Answer</h3>
                    </div>
    				<div class="panel-body">
                        <div class="row">
                          <div class="col-xs-10 col-sm-6 col-md-10">
                            <p>...</p>
                          </div>
                          <div class="col-xs-2 col-md-2">
                              <div class="vote">
                                  <button class="up" aria-pressed="false" title="Agree">
                                  <i class="voteup"></i>
                                  <span style="display: inline-block;">Yes</span>
                                  <span class="count" style="display: inline-block;">1</span>
                                  </button>
                                  <button class="down" aria-pressed="false" title="Disagree">

                                  <span style="display: inline-block; width: 100%;">No</span>
                                  <span class="count" style="display: inline-block;">2</span>
                                  <i class="votedown"></i>
                                  </button>
                              </div>
                          </div>
                        </div>
    				</div>
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Post an answer</label>
    <textarea class="form-control" rows="3" style="height:1em;" id="text"></textarea>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check to be anonymous
    </label>
  </div>
  <button type="submit" class="btn btn-default">Answer</button>


<style type="text/css">
textarea {
    border: 0 none white;
    overflow: hidden;
    padding: 0;
    outline: none;
    background-color: #D0D0D0;
    resize: none;
}
</style>
<script type="text/javascript">
var observe;
if (window.attachEvent) {
    observe = function (element, event, handler) {
        element.attachEvent('on'+event, handler);
    };
}
else {
    observe = function (element, event, handler) {
        element.addEventListener(event, handler, false);
    };
}
function init () {
    var text = document.getElementById('text');
    function resize () {
        text.style.height = 'auto';
        text.style.height = text.scrollHeight+'px';
    }
    /* 0-timeout to get the already changed text */
    function delayedResize () {
        window.setTimeout(resize, 0);
    }
    observe(text, 'change',  resize);
    observe(text, 'cut',     delayedResize);
    observe(text, 'paste',   delayedResize);
    observe(text, 'drop',    delayedResize);
    observe(text, 'keydown', delayedResize);

    text.focus();
    text.select();
    resize();
}
</script>
</head>

</div>

</body>
<?php

?>