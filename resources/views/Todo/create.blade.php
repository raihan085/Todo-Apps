@extends('Layout.app')

@section('content')

<h1 class="text-center my-5">Create Todo</h1>

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card card-default">

<div class="card-header">

Create new todo

</div>

<div class="card-body">

  @if($errors->any())

  <div class="alert alert-danger">

    <ul class="group-list">

      @foreach($errors->all() as $error)

      <li class="group-list-item">{{ $error }}</li>

      @endforeach

    </ul>

  </div>

  @endif

<form action='/store-todo' method="POST">
@csrf
<div class="form-group">

<input type="text" class="form-control" name="name" placeholder="name">

</div>

<div class="form-group">

<textarea name="description" cols="40" rows="3" class="form-control"></textarea>

</div>

<div class="form-group text-center">

<button class="btn btn-sm btn-success" type="submit">Create todo</button>

</div>

</form>

</div>

</div>

</div>

</div>

@endsection
