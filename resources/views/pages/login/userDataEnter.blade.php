@extends('layouts.app')
@section('content')

<form action="{{ Route('users.store') }}" method="post" enctype="multipart/form">
    @csrf
    <lable for="name">Name</lable>
    <input type="text" name="name"><br>

    <lable for="email">Email</lable>
    <input type="text" name="email"><br>

    <lable for="password">Password</lable>
    <input type="password" name="password"><br>

    <input type="hidden" value="admin" name="role">

    <input type="submit" value="Add" name="add" class="btn btn-outline-dark">
    <a href="{{ Route('users.index') }}" class="btn btn-outline-dark">login</a>

</form>

@endsection
