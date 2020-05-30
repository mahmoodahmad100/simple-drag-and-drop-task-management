@extends('layouts.master')

@section('content')
	<div class="container mt-3" ng-controller="projectCtrl">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3><a href="{{ URL::to('projects') }}">Checkout all projects</a></h3>
			</div>
		</div>
	</div>
@endsection