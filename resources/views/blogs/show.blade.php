@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url()->previous() }}" class="btn btn-primary float-right">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5>
                <a href="{{route('blog.show',$blog)}}">{{ucfirst($blog->title)}}</a>
            </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-12" >
            <img src="{{$blog->image}}" style="max-width: 200px; max-height: 200px" alt="">
        </div>
        <div class="col-md-9 col-sm-12">
            {!! $blog->description !!}</p>
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
</div>
@endsection
