(function () {
    "use strict";
    angular
        .module("productManagement")
        .controller("FeatureSelectionCtrl",
                     ['$scope', '$location', FeatureSelectionCtrl]);

    function FeatureSelectionCtrl($scope, $location, productResource) {
        //input from previous page
        var params = $location.search();
        $scope.datasetid = params.datasetid;
        $scope.selectedCol = params.label;
        //init
        $scope.features = [];
        

        $scope.addFeature = function (columnId)
            {
                var index = $scope.features.indexOf(columnId);
                if(index >= 0)
                {
                    $scope.features.splice(index,1);
                    //remove class for that column
                    var old_rows = document.getElementsByName("c" + columnId);
                    for (var i = 0, max = old_rows.length; i < max; i++) {
                            old_rows[i].className = "tabledata";
                        }
                }
                else {
                    $scope.features.push(columnId);
                    //add class to the column
                    var new_rows = document.getElementsByName("c" + columnId);
                    for (var i = 0, max = new_rows.length; i < max; i++) {
                            new_rows[i].className = "tabledata info";
                        }
                }
            };
        $scope.GoToModel = function () {
            
        }    
        $scope.back = function () {
            window.location = "#/ViewDataset";
        }
        $scope.GoToFeature = function () {
            window.location = "#/ModelSelection?datasetid="+$scope.datasetid + "&selectedCol="+$scope.selectedCol + "&features="+$scope.features;
        }

    }
}());
