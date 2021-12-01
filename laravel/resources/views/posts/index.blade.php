@extends('layouts.app')

@section('content')
    <br><br>
    <h1>Posts</h1>
    @if(count($posts) > 0 )
        @foreach($posts as $post)
            <div class="card padding p-3">
                <div class="row">
                    <div class="col-md-3">
                        <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </div>

                    <div class="col-md-9 ">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        <p>{!!$post->body!!}</p>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
 {{$posts->links('pagination::bootstrap-4')}}
    @else 
        <p>No posts found</p>
    @endif
@endsection 