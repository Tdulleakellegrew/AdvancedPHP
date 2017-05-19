(function(){
	'use strict';
	angular
		.module('app')
		.factory('PhoneService', PhoneService);

	PhoneService.$inject = ['$http', 'REQUEST'];

	function PhoneService($http, REQUEST){
		var url = REQUEST.Phones;
		var service = {
			'getPhones' : getPhones,
			'findPhone' : findPhone
		};

		return service;

		//returns all the phones
		function getPhones(){
			return $http.get(url).then(getPhonesComplete, getPhonesFailed);
		

			function getPhonesComplete(response){
				return response.data;
			}

			function getPhonesFailed(error){
				return [];
			}
		}

		//finds a sigle phone by searching through it's id
		function findPhone(id){
			return getPhones()
				.then(function(data){
				return findPhonesComplete(data);
			});
			//Returns all the info for a single phone
			function findPhonesComplete(data){
				var results = {};
				console.log(data);
				angular.forEach(data, function(value, key){
					if(!results.length){
						if(value.hasOwnProperty('id') && value.id === id){

							console.log(id);
							results = angular.copy(value);
						}
					}
				}, results);
				console.log(results);
				return results;
			}
		}
	}
})();