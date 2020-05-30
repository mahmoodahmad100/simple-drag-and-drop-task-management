app.controller('projectCtrl', function($scope, $window, projectService, taskService, backend) {

	var current_page = $window.location.href;
	var route        = current_page.substring(current_page.lastIndexOf('/') + 1);

	if(route == 'projects')
	{
		projectService.index()
		.then(function(response) {
			$scope.projects = response.data['data'];
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
		projectService.show(id)
		.then(function(response) {
			$scope.project = response.data['data'];
		}, function(response) {
			console.log(response);
			Swal.fire({
			  type: 'error',
			  title: 'Oops...',
			  text: 'something went wrong please try again later'
			})
		});
	}
	else if(route != 'create')  // to show the specified project (through the id)
	{
		var id = current_page.substring(current_page.lastIndexOf('/') + 1);
		projectService.show(id)
		.then(function(response) {
			$scope.project = response.data['data'];
		}, function(response) {
			console.log(response);
			Swal.fire({
			  type: 'error',
			  title: 'Oops...',
			  text: 'something went wrong please try again later'
			})
		});

		// sorting the tasks
		$(function() {
		    var sortable = $("tbody").sortable({
		      revert: true,
		      cursor: "move",
		      update: function(event, ui) {
		      	let rows     = $('tbody tr');
		      	let payload  = {
		      		ids: []
		      	};
		      	rows.each(function(index){
		      		payload.ids.push(parseInt($(this).find('th').text()));
		      	});

		      	// change the order in the backend
				taskService.order(payload)
				.then(function(response) {
					console.log(response);
				}, function(response) {
					console.log(response);
					Swal.fire({
					  type: 'error',
					  title: 'Oops...',
					  text: 'please make sure that you re-order the items again'
					})
				});

		      }
		    });
		 });
	}

	$scope.submitForm = function() {
		if(route == 'create')
			$scope.storeForm();
		else
			$scope.updateForm();
	};

	$scope.storeForm = function() {
		projectService.store($scope.project)
		.then(function(response) {
			$window.location.href = backend.BASE_URL + '/projects';
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
		projectService.update($scope.project.id, $scope.project)
		.then(function(response) {
			$window.location.href = backend.BASE_URL + '/projects';
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
		if(route == 'projects')
		{
			projectService.destroy($scope.id)
			.then(function(response) {
				$('#delete-modal').modal('hide');
				$scope.projects = $.grep($scope.projects, function(e){ 
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
		}
		else
		{
			taskService.destroy($scope.id)
			.then(function(response) {
				$('#delete-modal').modal('hide');
				$scope.project.tasks = $.grep($scope.project.tasks, function(e){ 
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
		}
	};
}); 