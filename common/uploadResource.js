(function () {
    "use strict"
    angular
        .module("common.services")
        .factory("uploadResource",
        [   "Upload",
            uploadResource
        ]);
    function uploadResource() {
        return Upload;
    };

}());