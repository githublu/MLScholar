(function () {
    "use strict";
    angular
        .module("productManagement")
        .controller("ModelSelectionCtrl",
                     ['$scope', '$location', ModelSelectionCtrl]);

    function ModelSelectionCtrl($scope, $location, productResource) {
        //input from previous page
        var params = $location.search();
        $scope.datasetid = params.datasetid;
        $scope.selectedCol = params.label;
        $scope.features = params.features;
        //init
        $scope.models = [];
        

        $scope.chooseModel = function(modelid) 
        {
            var index = $scope.models.indexOf(modelid) 
            if(index>= 0)
            {
                $scope.models.splice(index, 1);
                document.getElementById("m" + modelid).className = "list-group-item";
            }
            else{
                $scope.models.push(modelid);
                document.getElementById("m" + modelid).className = "list-group-item list-group-item-success";
            }
        }
        $scope.GoToModel = function () {
            
        }    
        $scope.back = function () {
            window.location = "#/FeatureSelection?datasetid=1&label=3";
        }
        $scope.GoToLearning = function () {
            //window.location = "#/ViewDataset";
        }

    }
}());
