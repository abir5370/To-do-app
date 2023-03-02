@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mt-5">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <div class="card-header">To-do list</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($todos as $todo)
                        <li class="list-group-item">{{$todo->name}} 
                            <a href="{{route('details',$todo->id)}}" class="btn btn-primary btn-sm float-end mx-2">view</a>
                            @if(!$todo->completed)
                                <a href="{{route('delete',$todo->id)}}" class="btn btn-danger btn-sm float-end">undone</a>

                                <a href="{{route('complete',$todo->id)}}" class="btn btn-warning btn-sm float-end mx-2 text-white">Done</a>
                            @else
                                <img src="{{asset('asset')}}/img/check-removebg-preview.png" alt="" style="width: 28px;margin-right:20px" class="float-end">
                            @endif
                        </li> 
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>




@endsection