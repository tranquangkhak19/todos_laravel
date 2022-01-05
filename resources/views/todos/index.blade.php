@extends('layouts.app')

@section('title')
    Todo List
@endsection

@section('content')
    <h1 class="text-primary text-center my-5">TODOS PAGE</h1>

    <div class="card card-default">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    Todos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}
                                <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-end">View</a>
                                @if(!$todo->completed)
                                    <a href="/todos/{{ $todo->id }}/complete" class="btn btn-warning btn-sm float-end mx-2">Complete</a>
                                @endif
                            </li>
                        @endforeach
                    <ul>
                </div>
            </div>
        </div>
        
    </div>
@endsection