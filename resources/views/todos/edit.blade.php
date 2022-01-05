@extends('layouts.app')

@section('title')
    Edit a todo
@endsection

@section('content')
    <h1 class="text-center">Edit a todo</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-default">
                <div class="card-header">Edit in this section</div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/todos/{{$todo->id}}/update" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{ $todo->name }}">
                        </div>

                        <div class="form-group">
                            <textarea name="description" id="" cols="10" rows="5" class="form-control" placeholder="Description">{{ $todo->description }}</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
@endsection