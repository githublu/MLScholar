//var app = angular.module('productManagement', ['ngFileUpload']);
(function () {
    "use strict";
    angular
        .module("productManagement")
        .controller("MyCtrl",
                     ['Upload', '$timeout','$http', MyCtrl]);

    function MyCtrl(Upload, $timeout, $http)
    {
        var vm = this;
        vm.uploadFiles = function (files, errFiles) {
            vm.files = files;
            vm.errFiles = errFiles;
            angular.forEach(files, function (file) {
                //$http({
                //    url: "http://localhost:54989/api/FileUpload",
                //    method: "POST",
                //    data: { file: file }
                //});
                file.upload = Upload.upload({
                    url: 'http://localhost:54989/api/FileUpload',
                    data: { file: file }
                });

                file.upload.then(function (response) {
                    $timeout(function () {
                        file.result = response.data;
                    });
                }, function (response) {
                    if (response.status > 0)
                        vm.errorMsg = response.status + ': ' + response.data;
                }, function (evt) {
                    file.progress = Math.min(100, parseInt(100.0 *
                                             evt.loaded / evt.total));
                });
            });
        }
    }
}());


//app.controller('MyCtrl', ['$scope', 'Upload', '$timeout', function ($scope, Upload, $timeout) {
//    $scope.uploadFiles = function (files, errFiles) {
//        $scope.files = files;
//        $scope.errFiles = errFiles;
//        angular.forEach(files, function (file) {
//            file.upload = Upload.upload({
//                url: 'file:///D:/vs_workspace/datafile/',
//                data: { file: file }
//            });

//            file.upload.then(function (response) {
//                $timeout(function () {
//                    file.result = response.data;
//                });
//            }, function (response) {
//                if (response.status > 0)
//                    $scope.errorMsg = response.status + ': ' + response.data;
//            }, function (evt) {
//                file.progress = Math.min(100, parseInt(100.0 *
//                                         evt.loaded / evt.total));
//            });
//        });
//    }
//}]);
