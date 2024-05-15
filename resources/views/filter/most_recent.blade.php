@extends('../tasks.base')
@section('content')

<div class="container">
    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item">
                <span>{{ $task->task_title }} - start date: {{$task->start_date}}</span> <!-- Afficher le titre de la tâche -->
                  <a href="{{ route('show_task',['id'=>$task->id])  }}"><i class="bi bi-eye-fill text-primary"></i></a>
                  <a href="{{ route('delete_task',['id'=>$task->id])  }}"><i class="bi bi-trash-fill text-danger"></i></a>
                  <a href="{{ route('edit_task',['id'=>$task->id])  }}"> <i class="bi bi-pencil-fill text-success"></i></a>


                
               
            </li>
        @endforeach
    </ul>
</div>
@endsection

