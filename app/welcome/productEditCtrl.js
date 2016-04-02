(function () {
    "use strict";

    angular
        .module("productManagement")
        .controller("ProductEditCtrl",
                     ["productResource",ProductEditCtrl]);

    function ProductEditCtrl(productResource) {
        var vm = this;
//        vm.product.productName = "asd";
        productResource.get({ id: 2 }, function (data) {
            vm.product = data;
        });
        vm.submit = function ()
        {
            vm.product.$save(
                function (data) {
                    console.log(data);
                }
            );
        }
    }
}());
