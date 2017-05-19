(function () {
    
    'use strict';
    angular
        .module('app.address')
        .controller('AddressDeleteController', AddressDeleteController);

    AddressDeleteController.$inject = ['$routeParams', 'AddressService'];
    /*
     * Simple controller to get information for the view.
     */
    function AddressDeleteController($routeParams, AddressService) {
        var vm = this;
        var addressID = $routeParams.addressId;
        vm.message = " ";
        
        activate();

        ////////////

        function activate() {
            AddressService.deleteAddress(addressID).then(function (response) {
                vm.message = "Address Deleted";
            }, function(error){
                vm.message = "Address was not deleted";
            });
        }

    }
    
})();