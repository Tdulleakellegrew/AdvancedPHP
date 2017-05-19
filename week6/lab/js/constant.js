(function(){
	'use strict';
	//Makes a constant variable for making requests to the phone data json file
	angular
		.module('app')
		.constant('REQUEST', {
			'Phones' : './data/phones.json'
		});
})();