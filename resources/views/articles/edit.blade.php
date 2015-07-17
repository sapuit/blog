@extends ('layouts.master')

@section ('head.title')
Edit an article
@stop

@section ('body.content')
<div class="container">

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2>Edit an article</h2>
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

			{!! Form::model($article,[
					'route' => ['article.update', $article->id],
					'method' => 'PUT',			
					'class' => 'form-horizontal'
				])
			!!}	
				
			@include('articles._form',['button_name'=>'Update'])

			{!! Form::close() !!}<!-- form-->
		</div>
	</div><!-- .row -->

</div>
@Stop