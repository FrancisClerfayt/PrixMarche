@extends('layouts.app')

@section('title', 'Toutes les catégories')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-10">
			<div class="row">
				@foreach ($categories as $category)
						<div class="col-4 category_rectangle">
							<h2> {{ $category->name }} </h2>
						</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection