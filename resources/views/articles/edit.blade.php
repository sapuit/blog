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
<!-- 				<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
 -->			{!! Form::token() !!}
				<div class="form-group">
					{!! Form::label('title',' Title', ['class' => 'control-label']) !!}		
					{!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placehoder'=> 'Fill out title of article', 'required'=>'true' ]) !!}	
				</div>

				<div class="form-group">
					{!! Form::label('content', 'Content', ['class' => 'control-label']) !!}		
					{!! Form::text('content', null, ['id' => 'content', 'class' => 'form-control', 'placehoder'=> 'Fill out content of article', 'required' => 'true' ]) !!}	
				</div>

				<div class="form-group">
					{!! Form::submit('Update',[ 'class' => 'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}<!-- form-->
		</div>
	</div><!-- .row -->

</div>
@Stop