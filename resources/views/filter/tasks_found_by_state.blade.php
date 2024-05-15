@extends('../tasks.base')
@section('content')
@include('filter.filter')

<div class="container">
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

@endsection

