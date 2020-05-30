app.controller('taskCtrl', function($scope, $window, taskService, projectService, backend) {

	var current_page = $window.location.href;
	var route        = current_page.substring(current_page.lastIndexOf('/') + 1);

	if(route == 'tasks')
	{
		taskService.index()
		.then(function(response) {
			$scope.tasks = response.data['data'];
		}, function(response) {
			console.log(response);
			Swal.fire({
			  type: 'error',
			  title: 'Oops...',
			  text: 'something went wrong please try again later'
			})
		});
	}
	else if(route == 'edit')
	{
		current_page = current_page.slice(0, -5);
		var id = current_page.substring(current_page.lastIndexOf('/') + 1);
		taskService.show(id)
		.then(function(response) {
			$scope.task            = response.data['data'];
			$scope.task.project_id = $scope.task.project.id;
		}, function(response) {
			console.log(response);
			Swal.fire({
			  type: 'error',
			  title: 'Oops...',
			  text: 'something went wrong please try again later'
			})
		});
	}
	else
	{
		$scope.task       = {};
		$scope.task.order = 1; // default value (when creating new task)
	}

	if(route == 'create' || route == 'edit')
	{
		projectService.index()
		.then(function(response) {
			$scope.projects = response.data['data'];
			console.log($scope.projects);
		}, function(response) {
			console.log(response);
			Swal.fire({
			  type: 'error',
			  title: 'Oops...',
			  text: 'something went wrong please try again later'
			})
		});
	}

	$scope.submitForm = function() {
		if(route == 'create')
			$scope.storeForm();
		else
			$scope.updateForm();
	};

	$scope.storeForm = function() {
		taskService.store($scope.task)
		.then(function(response) {
			$window.location.href = backend.BASE_URL + '/projects/' + $scope.task.project_id;
		}, function(response) {
			console.log(response);
			Swal.fire({
			  type: 'error',
			  title: 'Oops...',
			  text: 'please make sure that you are submitting the right data'
			})
		});
	};

	$scope.updateForm = function() {
		taskService.update($scope.task.id, $scope.task)
		.then(function(response) {
			$window.location.href = backend.BASE_URL + '/projects/' + $scope.task.project_id;
		}, function(response) {
			console.log(response);
			Swal.fire({
			  type: 'error',
			  title: 'Oops...',
			  text: 'please make sure that you are submitting the right data'
			})
		});
	};

	$scope.itemToBeDeleted = function(id) {
		$scope.id = id;
	};

	$scope.destroy = function() {
		taskService.destroy($scope.id)
		.then(function(response) {
			$('#delete-modal').modal('hide');
			$scope.tasks = $.grep($scope.tasks, function(e){ 
			     return e.id != $scope.id; 
			});
		}, function(response) {
			console.log(response);
			Swal.fire({
			  type: 'error',
			  title: 'Oops...',
			  text: 'something went wrong please try again later'
			})
		});
	};
}); 