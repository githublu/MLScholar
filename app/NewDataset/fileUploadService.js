//directive for define filter
//isolated scope
(function () {
    "use strict";
    angular
        .module("productManagement")
        .service('fileUpload', ['$http', function ($http) {
	        this.uploadFileToUrl = function(file, uploadUrl){
	               var data = new FormData();
	               data.append('file', file);
    $.ajax({
        url: 'php/fileupload.php',
        type: 'POST',
        data: data,
        cache: false,
        dataType: 'json',
        processData: false, // Don't process the files
        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
        success: function(data)
        {
        	console.log(data);
        },
        error: function(data)
        {
            // Handle errors here
            console.log(data);
            // STOP LOADING SPINNER
        }
    });


	            }
	         }]);
}());