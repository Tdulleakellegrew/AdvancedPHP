(function(){
	'use strict';
	angular
		.module('app')
		.controller('PhoneDetailController', PhoneDetailController);

	PhoneDetailController.$inject = ['$routeParams', 'PhoneService'];
	// Controls all the data recieved from the request and sends it to the phone-detail template
	function PhoneDetailController($routeParams, PhoneService){
		var vm = this;

		vm.phone = {};
		var id = $routeParams.phoneId;

		activate();


		function activate() {
			PhoneService.findPhone(id).then(function(response){
				vm.phone = response;
			});
		}
	}
})();