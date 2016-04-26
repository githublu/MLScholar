(function () {
    "use strict";
    angular
        .module("productManagement")
        .controller("NewDatasetCtrl",
                     ['$scope', 'fileUpload', NewDatasetCtrl]);

    function NewDatasetCtrl($scope, fileUpload, productResource) {
        $scope.uploadFile = function(){
           var file = $scope.myFile;
           
           console.log('file is ' );
           console.dir(file);
           
           var uploadUrl = "/";
           fileUpload.uploadFileToUrl(file, uploadUrl);
        };
    }
}());
