(function () {
    "use strict";
    angular
        .module("productManagement")
        .controller("HomeCtrl",
                     [HomeCtrl]);

    function HomeCtrl(productResource) {
        var vm = this;
        // productResource.query(function (data) {
        //     vm.products = data[0].table;
        //     console.log(data[0]);
        // })
        // //productResource.get({ id: 2 }, function (data) {
        // //    vm.products = data;
        // //});
        // //vm.submit = function (query) {
        // //    productResource.query({ sql: query }, function (data) {
        // //        vm.products = data;
        // //    });

        // //}
        // vm.submit = function (column, row, value, operation, table) {
        //     productResource.query({
        //         column: column, row: row, value: value, operation: operation, table: table
        //     }, function (data) {
        //         vm.products = data[0].table;

        //     });

        // }

    }
}());
