@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Bloggers list</h2>
            <p>This is the list of the blogger.</p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Referral Code</th>
                            <th>Referred By</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bloggers as $blogger)
                        <tr>
                            <td>
                                <a href="{{route('admin.users.show',$blogger)}}">
                                    {{ucfirst($blogger->name)}}
                                </a>
                            </td>
                            <td>{{$blogger->email}}</td>
                            <td>{{$blogger->phone}}</td>
                            <td>{{$blogger->referral_code}}</td>
                            <td>{{$blogger->referred_by ? $blogger->referred_by : "--"}}</td>
                            <td>{{$blogger->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $bloggers->links() }}
        </div>
    </div>
</div>
@endsection