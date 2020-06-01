@extends('layout.app')


@section('Title')

Todo List

@endsection

@section('content')
    <h1 class="text-center my-5">Todos Page</h1>

    <div class="row jastify-container-center">

      <div class="col-md-8 offset-md-2">

        <div class="card card-default">

          <div class="card-header">
            Todo
          </div>

          <div class="card-body">

            <ul class="list-group">
              @foreach($todos as $todo)

              <li class="list-group-item">
                {{ $todo->name }}



                @if(! $todo->completed)
                  <a href="todos/{{ $todo->id }}/completed" class="btn btn-sm btn-warning float-right" style="color:white">Completed</a>
                @endif

                <a href="todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right mr-2">View</a>

              </li>

              @endforeach
            </ul>

          </div>

        </div>

      </div>

    </div>

  </div>

@endsection
