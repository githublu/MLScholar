(function () {
    "use strict";

    var app = angular.module("productManagement",
                            ["common.services", "ui.router", 'ngFileUpload', 'angularFileUpload','ngRoute']);

//routing
    // app.config(function (routeProvider, $urlRouterProvider) {
    //     //
    //     // For any unmatched url, redirect to /state1
    //     $urlRouterProvider.otherwise("/welcome");
    //     //
    //     // Now set up the states
    //     $stateProvider
    //       .state('add', {
    //           url: "/add",
    //           templateUrl: "app/welcome/addDataset.html"
    //       })
    //       //.state('state1.list', {
    //       //    url: "/list",
    //       //    templateUrl: "partials/state1.list.html",
    //       //    controller: function ($scope) {
    //       //        $scope.items = ["A", "List", "Of", "Items"];
    //       //    }
    //       //})
    //       .state('home', {
    //           url: "/home",
    //           templateUrl: "app/home/homeView.html"
    //       })
    //       .state('welcome', {
    //           url: "/welcome",
    //           templateUrl: "app/welcome/welcomeView.html"
    //       })
    //       //.state('state2.list', {
    //       //    url: "/list",
    //       //    templateUrl: "partials/state2.list.html",
    //       //    controller: function ($scope) {
    //       //        $scope.things = ["A", "Set", "Of", "Things"];
    //       //    }
    //       //});
    // });
// there might need to bind to the login page
    // app.controller("appCtrl",
    //                  ['$scope', appCtrl]);
    // function appCtrl($scope) {
    //     $scope.userid = 1;
    // }

    app.config(['$routeProvider',
        function($routeProvider) {
          $routeProvider
            .when('/add', {
              templateUrl: 'app/welcome/addDataset.html'
              //,controller: 'PhoneListCtrl'
            })
            .when('/home', {
              templateUrl: "app/home/homeView.html"
            })
            .when('/NewDataset', {
              templateUrl: "app/NewDataset/newDatasetView.html"
            })
            .when('/BuildDataset', {
              templateUrl: "app/BuildDataset/buildDSView.html"
            })
            .when('/ViewDataset', {
              templateUrl: "app/ViewDataset/viewDSView.html"
            })            
            .when('/welcome', {
              templateUrl: "app/welcome/welcomeView.html"
            })
            .when('/ChooseFeature', {
              templateUrl: "app/ChooseFeature/ChooseFeatureView.html"
            })
            .when('/FeatureSelection', {
              templateUrl: "app/FeatureSelection/FeatureSelectionView.html"
            })
            .when('/ModelSelection', {
              templateUrl: "app/ModelSelection/ModelSelectionView.html"
            })
            .otherwise({
              redirectTo: '/welcome'
            });

            }]);
}());