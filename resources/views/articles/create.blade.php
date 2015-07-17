@extends ('layouts.master')

@section ('head.title')
Create a new article
@stop

@section ('body.content')
<div class="container">

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2>Create a new article</h2>
			<hr>
		</div>	
	</div>	<!-- .row -->

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			@if (count($errors) > 0 )
				<div class="alert alert-danger">
					<strong>Whoops!</strong> thre were some problem with your input.
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<!-- <form action="{{ route('article.store') }}" method="POST" class="form-horizontal">

				<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
				
				<div class="form-group">
					<label class="control-label" for="title">Title</label>
					<input class="form-control" type="text" name="title" id="title" required placeholder="fill out title of article....">
				</div>

				<div class="form-group">
					<label class="control-label" for="content">Content</label>
					<input class="form-control" type="text" name="content" id="content" required placeholder="fill out content of article...">
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Submit</button>
				</div>

			</form><! form--> 

			{!! Form::open([
					'route' => ['article.store'],
					'method' => 'POST',			
					'class' => 'form-horizontal'
				])
			!!}	
				
			@include('articles._form', [ 'button_name' => 'Create' ])

			{!! Form::close() !!}<!-- form-->

		</div>
	</div><!-- .row -->

</div>
@Stop