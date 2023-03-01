@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center" >
                <h1 class="page-title">{{session()->get('name')}} Todo List</h1>
            </div>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('todo.store') }}" method="post" enctype="multipart/form">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title" placeholder="Default input" aria-label="default input example">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">status</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $key => $task)
                        <tr>
                            <th scope="row">{{ ++$key}}</th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->done }}</td>
                            <td>
                                <form action="{{ route('todo.drop',$task->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                    <a href="{{ route('done', $task->id) }}" class="btn btn-danger">done</a>
                                    <a href="{{ route('not_done', $task->id) }}" class="btn btn-danger">not done</a>
                                    <a href="{{ route('todo.modify', $task->id) }}" class="btn btn-danger">edite</a>


                                </form>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>
            </div>
        </div>

    </div>
</div>
@endsection

@push('css')
<style>
    .page-title{
        padding-top: 10vh;
        font-size: 5rem;
        color: #fb19
    }
</style>

@endpush

