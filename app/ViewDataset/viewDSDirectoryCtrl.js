//directive for define filter
//isolated scope
(function () {
    "use strict";
    angular
        .module("productManagement")
        .directive('datasetDistribution', [function () {
        return {
            restrict: 'E',
            scope: {},

            link: function ($scope, element, attributes) {
                $scope.datesetid = -1;
                $scope.datasetcol = [];
                var ShowDataDistribution = function (datasetid)
                {
                    $scope.datesetid = datasetid;
                    $scope.datasetcol = GetDatasetCol(datasetid);
                    $('#modalPopUp').modal('toggle');
                }
                $scope.$on('ShowDataDistribution', function (event, args) {
                    ShowDataDistribution(args.datasetid);
                    console.log(args.datasetid);
                });

                var GetDatasetCol = function (datasetid) {
                    return ['name1','name2','name3','name4'];
                }
            },
            templateUrl: '/app/ViewDataset/viewDSDirectory.html'
        };
    }]);
}());