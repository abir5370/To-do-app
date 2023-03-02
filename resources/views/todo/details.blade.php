@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mt-5">
            <div class="card-header">Todo Details</div>
            <div class="card-body">
                <p><strong>{{$detais->name}}</strong><p class="text-end">{{$detais->created_at}}</p></p>
                <p>{{$detais->desp}}</p>
                <a href="{{route('edit',$detais->id)}}" class="btn btn-primary btn-sm">Edit</a> ||
                <a href="{{route('delete',$detais->id)}}" class="btn btn-danger btn-sm">Delete</a>
            </div>
        </div>
    </div>
</div>

@endsection