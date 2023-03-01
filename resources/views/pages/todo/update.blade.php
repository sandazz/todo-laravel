@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center" >
                <h1 class="page-title">Update My Todo List</h1>
            </div>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('todo.update',$task->id) }}" method="post" enctype="multipart/form">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title" placeholder="{{ $task->title }}" aria-label="default input example">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
    .page-title{
        padding-top: 10vh;
        font-size: 5rem;
        color: rgba(235, 17, 255, 0.6)
    }
</style>

@endpush
