(function () {
    "use strict";
    angular
        .module("productManagement")
        .controller("ChooseFeatureCtrl",
                     ['$scope', ChooseFeatureCtrl]);

    function ChooseFeatureCtrl($scope, productResource) {
        //input from previous page
        $scope.datasetid = 1;
        $scope.selectedCol = 3; //pre-selected default label
        //init
        $scope.featurecol = $scope.selectedCol; //actual user selected label
        $scope.mltype = "Supervised Machine Learning";

        $scope.selectFeature = function (columnId)
            {
                if (columnId != $scope.selectedCol || $scope.featurecol == -1) {
                    $scope.mltype = "Supervised Machine Learning";
                    $scope.featurecol = columnId;
                    var old_rows = document.getElementsByName("c"+$scope.selectedCol);
                    var new_rows = document.getElementsByName("c" + columnId);

                    for (var i = 0, max = old_rows.length; i < max; i++) {
                            old_rows[i].className = "tabledata";
                        }
                    for (var i = 0, max = new_rows.length; i < max; i++) {
                            new_rows[i].className = "tabledata success";
                        }
                    $scope.selectedCol =columnId;
                }
                else {
                    $scope.featurecol = -1;
                    $scope.mltype = "Unsupervised Machine Learning";
                    var old_rows = document.getElementsByName("c"+$scope.selectedCol);
                    for (var i = 0, max = old_rows.length; i < max; i++) {
                            old_rows[i].className = "tabledata";
                        }
                }
            };

        $scope.back = function () {
            window.location = "#/ViewDataset";
        }
        $scope.GoToFeature = function () {
            window.location = "#/FeatureSelection?datasetid="+$scope.datasetid + "&label="+$scope.featurecol;
        }

    }
}());
