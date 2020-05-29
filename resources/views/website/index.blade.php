@extends('layouts.master')

@section('content')
	<div class="container mt-3">
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
				    <tr>
				      <th>1</th>
				      <td>Test</td>
				      <td>it's just a project</td>
				      <td>
				      	<a class="btn btn-warning" href="#"><i class="fa fa-search"></i></a>
				      	<a class="btn btn-info" href="#"><i class="fa fa-pencil"></i></a>
				      	<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a>
				      </td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
@endsection