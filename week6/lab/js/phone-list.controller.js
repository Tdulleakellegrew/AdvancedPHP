(function(){
	'use-strict';
	angular
		.module('app')
		.controller('PhoneListController', PhoneListController);

	PhoneListController.$inject = ['PhoneService'];

	//This controls and retrieves all the data that the phone-list recieves
	function PhoneListController(PhoneService){
		var vm = this;

		vm.phones = [];

		activate();



		function activate(){
			PhoneService.getPhones().then(function(response){
				vm.phones = response;
			})
		}
	}

})();