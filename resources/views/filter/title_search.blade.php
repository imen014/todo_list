@extends('../tasks.base')
@section('content')

<div class="container">
<form action="{{ route('tasks_found_by_title')  }}" method="post"> 
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="task_title" class="form-label">task title</label>
        <input type="text" class="form-control" value="{{  old('task_title') }}" id="task_title" name="task_title" placeholder="enter a title.">
      
      </div>
      <input type="submit" value="Confirm" class="btn btn-dark">
</form>
</div>
@endsection