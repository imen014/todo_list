@extends('../tasks.base')
@section('content')

<div class="container">
<form action="{{ route('tasks_found_by_state')  }}" method="post"> 
    @csrf
    <div class="mb-3">
        <select class="form-select" aria-label="state" id="task_state" name="task_state">
          <option selected>State at the moment</option>
          <option value="finished">Finished</option>
          <option value="in_progress">In progress</option>
          <option value="completed">Completed</option>
          <option value="not_yet_started">Not yet started</option>
        </select>
      </div>
  
      <input type="submit" value="Confirm" class="btn btn-dark">
</form>
</div>
@endsection