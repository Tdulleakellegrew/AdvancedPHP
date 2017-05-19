(function () {
    
    'use strict';
    angular
        .module('app.address')
        .controller('AddressController', AddressController);

    AddressController.$inject = ['AddressService'];
    /*
     * Simple controller to get information for the view.
     */
    function AddressController(AddressService) {
        var vm = this;

        vm.addresses = [];
        vm.deleteAddress = deleteAddress;
        vm.message = '';
        activate();

        ////////////

        function activate() {
            AddressService.getAllAddresses().then(function (response) {
                vm.addresses = response;
            });
        }

        function deleteAddress(addressID){
            AddressService.deleteAddress(addressID).then(function (response) {
                vm.message = "Address Deleted";
                activate();
            }, function(error){
                vm.message = "Address was not deleted";
            });
        }

    }
    
})();