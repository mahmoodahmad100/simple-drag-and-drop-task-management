@extends('layouts.master')

@section('content')
	<div class="container mt-3" ng-controller="projectCtrl">
		<div class="row">
			<div class="col-md-12">
				<h3>edit the project</h3>
				@include('projects._form')
			</div>
		</div>
	</div>
@endsection