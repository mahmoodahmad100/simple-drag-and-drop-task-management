@extends('layouts.master')

@section('content')
	<div class="container mt-3" ng-controller="projectCtrl">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3>All projects</h3>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Description</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr ng-repeat="project in projects">
				      <th>@{{ project.id }}</th>
				      <td>@{{ project.name }}</td>
				      <td>@{{ project.description }}</td>
				      <td>
				      	<a class="btn btn-warning" href="projects/@{{ project.id }}"><i class="fa fa-search"></i></a>
				      	<a class="btn btn-info" href="projects/@{{ project.id }}/edit"><i class="fa fa-pencil"></i></a>
				      	<a class="btn btn-danger" href="#" ng-click="itemToBeDeleted(project.id)" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a>
				      </td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>

	    <!-- delete modal -->
	    @include('layouts.partials._delete-modal')
	</div>
@endsection