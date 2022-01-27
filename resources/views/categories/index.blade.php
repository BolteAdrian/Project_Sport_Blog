@extends('layouts.app')

@section('title', '| All Categories')

@section('content')

<style>
	.table a {
		display: block;
		text-decoration: none;
	}
</style>

<div class="row">
	<div class="col-md-8">
		<h1>Categories</h1>
		<table class="table">
			<thead>
				<tr>
					
					<th></th>
				</tr>
			</thead>

			<tbody align="center">

				@foreach ($categories as $category)
				@if($category->name =="Football" || $category->name =="Handball" || $category->name =="Olimpics" || $category->name =="Tennis")
				<tr>
					

					<td ><a href="/{{ $category->name }}"><strong style="font-size: 30px;">{{ $category->name }}</a></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>

				</tr>
				@else
				<tr>
					
					<td><a href="/default/{{ $category->name }}"><strong style="font-size: 30px;">{{ $category->name }}</a></td>
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
<<<<<<< HEAD
=======
		@endif
>>>>>>> 32a39726b11e38dc69c5ab5b009160faa4bee804
	</div>
	@endif
</div>

@endsection