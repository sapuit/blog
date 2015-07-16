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
			<form action="{{ route('article.store') }}" method="POST" class="form-horizontal">

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

			</form><!-- form-->
		</div>
	</div><!-- .row -->

</div>
@Stop