@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Blogs</h1>
        </div>
    </div>
    @foreach($blogs as $blog)
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h5>
                <a href="#">{{ucfirst($blog->title)}}</a>
            </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-12" >
            <img src="{{$blog->image}}" style="max-width: 200px; max-height: 200px" alt="">
        </div>
        <div class="col-md-9 col-sm-12">
            <p class="blog-list-text">{{$blog->description}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">Date :- {{$blog->created_at}}</div>
        <div class="col-md-6"> 
            <a href="" class="float-right">
                {{$blog->user->name}}
            </a>
        </div>
    </div>
    @endforeach
    <hr>
    {{ $blogs->links() }}
</div>
@endsection
