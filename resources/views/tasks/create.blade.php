@extends('layouts.master')

@section('content')
	<div class="container mt-3" ng-controller="taskCtrl">
		<div class="row">
			<div class="col-md-12">
				<h3>create new task</h3>
				@include('tasks._form')
			</div>
		</div>
	</div>
@endsection