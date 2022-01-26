@extends('layouts.app')

@section('title', '| All Categories')

@section('content')

<style>
	.table a
{
    display:block;
    text-decoration:none;
}
</style>

	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>
			
				<tbody>
					
						@foreach ($categories as $category)
						@if($category->name =="Football" || $category->name =="Handball" || $category->name =="Olimpics" || $category->name =="Tennis")
					<tr>
						<th>{{ $category->id }}</th>
						
						<td><a href="/{{ $category->name }}">{{ $category->name }}</a></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					    
					</tr>
					@else
					<tr>
						<th>{{ $category->id }}</th>
						<td><a href="/default/{{ $category->name }}">{{ $category->name }}</a></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
					     
					</tr>
					@endif
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->
		@if (Auth::check())
		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
					<h2>New Category</h2>
					{{ Form::label('name', 'Name:') }}
					{{ Form::text('name', null, ['class' => 'form-control']) }}

					{{ Form::submit('Create New Category', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
				
				{!! Form::close() !!}
			</div>
		</div>
		@endif
	</div>

@endsection