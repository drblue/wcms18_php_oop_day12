@extends('layouts/app')

@section('content')
	<div class="container mt-3">
		<h1>{{ $project->title }}</h1>

		<p>{{ $project->description }}</p>

		<a href="/projects">&laquo; Back to all projects</a>
	</div>
@endsection
