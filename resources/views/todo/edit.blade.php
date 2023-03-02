@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mt-5">

            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif

            <div class="card-header">Edit todo</div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{route('update',$todo->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" name="name" class="form-control" value="{{$todo->name}}">
                    </div>
                    <div class="form-group">
                        <label for="">description</label>
                        <textarea name="desp" id="" class="form-control" >{{$todo->desp}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary mt-2 w-25">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection