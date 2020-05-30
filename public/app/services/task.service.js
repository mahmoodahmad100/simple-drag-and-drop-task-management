app.factory('taskService', ['$http','backend', function($http, backend) {
	var endpoint = backend.API_URL + 'tasks';
	return {
	  index: function () {
	  	return $http.get(endpoint, backend.API_CONFIG);
	  },
	  store: function (payload) {
	  	return $http.post(endpoint, payload, backend.API_CONFIG);
	  },
	  show: function (id) {
	  	return $http.get(endpoint + '/' + id, backend.API_CONFIG);
	  },
	  update: function (id, payload) {
	  	return $http.put(endpoint + '/' + id, payload, backend.API_CONFIG);
	  },
	  order: function (payload) {
	  	return $http.put(endpoint, payload, backend.API_CONFIG);
	  },
	  destroy: function (id) {
	  	return $http.delete(endpoint + '/' + id, backend.API_CONFIG);
	  },
	}
}]);