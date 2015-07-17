@extends ('layouts.master')

@section ('head.title')
Hien thi bai viet
@stop

@section ('body.content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2>{{ $article->title }}</h2>
			<p>{{ $article->content }}</p>
		</div>	
	</div>

	

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<a href="{{ route('article.edit', $article->id)}}" class="btn btn-info">Update</a>
			{!! Form::open([
				'route' => ['article.destroy', $article->id ],
				'method' => 'DELETE',
				'style' => 'display: inline'
			]) !!}
				<button class="btn btn-danger">Delete</button>
			{!! Form::close() !!}
		</div>
	</div>

	<div class="row" style='margin-top : 20px'>
		<div class=" col-sm-2 col-sm-offset-3">
			<a href="/" >
				<span class="glyphicon glyphicon-chevron-left"></span>
				Back to home 
			</a>
		</div>
	</div>
</div>		
@stop
