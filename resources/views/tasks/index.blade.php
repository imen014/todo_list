@extends('../tasks.base')
@section('content')

@guest
<div class="container">
    <p> <strong>  Please <a href="{{ route('login') }}">login</a> to view your tasks.</p>
    <p>or u can just </strong> </p>
    <a href="{{ route('register') }}">register</a>
</div>
@endguest



@auth
<div class="row justify-content-center">
  <div class="col-8 mt-5">
<div class="container">
@include('filter.filter')
</div>
</div>
<div class="col-3 mt-5">
<div class="container">
  <a class="btn btn-primary" href="{{ route('create_task')  }}"> Create a task</a>
</div>
</div>
</div>
<div class="container">
  <div class="mt-5">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Start date</th>
        <th scope="col">Start time</th>
        <th scope="col">End date</th>
        <th scope="col">End date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)

      <tr>
        <th scope="row">{{ $task->id }}</th>
        <td> <span>{{ $task->task_title }}</span></td>
        <td> <span>{{ $task->start_date }}</span></td>
        <td> <span>{{ $task->start_time }}</span></td>
        <td> <span>{{ $task->end_date }}</span></td>
        <td> <span>{{ $task->end_time }}</span></td>
        <td><a href="{{ route('show_task',['id'=>$task->id])  }}"><i class="bi bi-eye-fill text-primary"></i></a>
            <a href="{{ route('delete_task',['id'=>$task->id])  }}"><i class="bi bi-trash-fill text-danger"></i></a>
            <a href="{{ route('edit_task',['id'=>$task->id])  }}"> <i class="bi bi-pencil-fill text-success"></i></a>
        </td>
      </tr>
      @endforeach

     
    </tbody>
  </table>
</div>
</div>
</div>
@endauth
@endsection

