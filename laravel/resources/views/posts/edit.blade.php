
@extends('layouts.app')

@section('content')
<br><br>
    <h1>Edit Post</h1>
    {!! Form::open(["action" => ["App\Http\Controllers\PostsController@update", $post->id], "method" => "POST" , 'enctype' => 'multipart/form-data']) !!}    
       <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body , ['id' => 'textarea' ,'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>

        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection