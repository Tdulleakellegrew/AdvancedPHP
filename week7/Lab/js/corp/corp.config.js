(function() {
    'use strict';

    /*
     * This will allow us to have constants that will not change throughout the app.
     * good references for API locations
     */
    angular
        .module('app.corp')
        .constant('REQUEST', {
            'corp' : '../../week5/lab/api/v1/corps'
        });
        
})();