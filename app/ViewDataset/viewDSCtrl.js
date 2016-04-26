(function () {
    "use strict";
    angular
        .module("productManagement")
        .controller("ViewDSCtrl",
                     ['$rootScope','$scope', ViewDSCtrl])

    function ViewDSCtrl($rootScope,$scope, productResource) {
        //$scope.url = "app/BuildDataset/dataset.html";
        $scope.show = function (datasetid) {
            $rootScope.$broadcast('ShowDataDistribution', {datasetid:datasetid});
        }

        $scope.GoToFeature = function(datasetid)
        {
            window.location = "#/ChooseFeature?datasetid="+datasetid;
        }
    }



}());
