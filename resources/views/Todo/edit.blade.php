@extends('Layout.app')

@section('content')

<h1 class="text-center">{{ $todo->name }}</h1>

<div class="row justify-content-center">

<div class="col-md-6">

  <div class="card card-default">

    <div class="card-header">Edit todo</div>

    <div class="card-body">


      @if($errors->any())

      <div class="alert alert-danger">

        <ul class="group-item">

        @foreach($errors->all() as $error)
        <li class="group-item-list">{{ $error }}</li>
        @endforeach

        </ul>

      </div>

      @endif


      <form action="/todos/{{ $todo->id }}/update" method="POST">

        @csrf

        <div class="form-group">

        <input type="text" class="form-control" name="name" placeholder="{{ $todo->name }}">

        </div>

        <div class="form-group">

          <textarea name="description" cols="20" rows="3" class="form-control">{{ $todo->description }}</textarea>

        </div>

        <div class="form-group text-center">

          <button class="btn btn-success btn-sm" type="submit">Update todo</button>

        </div>

      </form>

    </div>

  </div>

</div>

</div>

@endsection
