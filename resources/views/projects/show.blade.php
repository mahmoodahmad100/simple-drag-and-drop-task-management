@extends('layouts.master')

@section('css')
	<style>
		tbody{
			cursor: grab;
		}
	</style>
@endsection

@section('content')
	<div class="container mt-3" ng-controller="projectCtrl">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3>All Tasks related to <b><u>@{{ project.name }}</u></b> project</h3>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Priority</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr ng-repeat="task in project.tasks">
				      <th>@{{ task.id }}</th>
				      <td>@{{ task.name }}</td>
				      <td>@{{ task.priority }}</td>
				      <td>
				      	<a class="btn btn-info" href="../tasks/@{{ task.id }}/edit"><i class="fa fa-pencil"></i></a>
				      	<a class="btn btn-danger" href="#" ng-click="itemToBeDeleted(task.id)" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a>
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