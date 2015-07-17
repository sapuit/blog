{!! Form::token() !!}
<div class="form-group">
	{!! Form::label('title',' Title', ['class' => 'control-label']) !!}		
	{!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placehoder'=> 'Fill out title of article', 'required'=>'true' ]) !!}	
</div>

<div class="form-group">
	{!! Form::label('content', 'Content', ['class' => 'control-label']) !!}		
	{!! Form::text('content', null, ['id' => 'content', 'class' => 'form-control', 'placehoder'=> 'Fill out content of article', 'required' => 'true' ]) !!}	
</div>

<div class="form-group">
	{!! Form::submit($button_name,[ 'class' => 'btn btn-primary']) !!}
</div>