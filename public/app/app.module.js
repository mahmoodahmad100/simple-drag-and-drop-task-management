var app = angular.module('userApp', []);

 // define our canstant for the API
app.constant('backend', {
	BASE_PATH: localStorage.getItem('APP_BASE_PATH'), //  APP_BASE_PATH stored in localStorage in master.blade.php
	get BASE_URL(){
		return this.BASE_PATH
	},
	get API_URL(){
		return this.BASE_PATH + '/api/v1/'
	},
	API_CONFIG: {
		headers: {
			Authorization: localStorage.getItem('token') ? 'Bearer ' + localStorage.getItem('token') : null
		}
	}
});


// Main Controller
app.controller('mainCtrl', function($scope, $window, userService, backend) {

});
