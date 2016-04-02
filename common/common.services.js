(function () {
    "use strict"
    angular
        .module("common.services", ["ngResource", "ngFileUpload"])
        .constant("appSettings", {
            serverPath: "http://localhost:54989/"
        });
}());