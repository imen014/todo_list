@extends('../tasks.base')
@section('content')

<div class="container">
    <div class="row">
<div class="col-8">
<form action="{{ route('update_task', ['id' => $task->id]) }}" method="post">
{{ csrf_field() }}
@method('PUT')
<div class="mb-3">
    <label for="task_title" class="form-label">Add a task</label>
    <input type="text" class="form-control" value="{{ old('task_title', $task->task_title) }}" id="task_title" name="task_title" placeholder="enter a task.">
    @error('task_title')
    <div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="task_content" class="form-label"> Description</label>
    <textarea required class="form-control"   id="task_content" rows="3">{{ old('task_content', $task->task_content) }}</textarea>
    @error('task_content')
    <div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="task_state" class="form-label">State</label>
    <select class="form-select" id="task_state" name="task_state">
        <option value="finished" {{ old('task_state', $task->task_state) == 'finished' ? 'selected' : '' }}>Finished</option>
        <option value="in_progress" {{ old('task_state', $task->task_state) == 'in_progress' ? 'selected' : '' }}>In progress</option>
        <option value="completed" {{ old('task_state', $task->task_state) == 'completed' ? 'selected' : '' }}>Completed</option>
        <option value="not_yet_started" {{ old('task_state', $task->task_state) == 'not_yet_started' ? 'selected' : '' }}>Not yet started</option>
    </select>
    @error('task_state')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="start_date" class="form-label">Start date</label>
    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $task->start_date) }}">
    @error('start_date')
    <div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="start_time" class="form-label">Start time</label>
    <input type="time" class="form-control" id="start_time" name="start_time" value="{{ old('start_time', $task->start_time) }}">
    @error('start_time')
    <div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="end_date" class="form-label">End date</label>
    <input type="date" class="form-control" id="end_date" name="end_date"  value="{{ old('end_date', $task->end_date) }}">
    @error('end_date')
    <div class="text-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-3">
    <label for="end_time" class="form-label">End time</label>
    <input type="time" class="form-control" id="end_time" name="end_time"  value="{{ old('end_time', $task->end_time) }}">
    @error('end_time')
    <div class="text-danger">{{ $message }}</div>
  @enderror
  </div>

<div class="mb-3">
    <input type="submit" class="btn btn-dark" id="validate" name="validate" value="Confirm.">
  </form> 
</div>
</div>

</div>
</div>
@endsection