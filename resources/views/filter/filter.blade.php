
<div class="container">
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
    <a href="{{route('most_recent_tasks')}}"><i class="bi bi-sort-up text-light"></i></a>
</button>
  <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
    <a href="{{route('least_recent_tasks')}}"><i class="bi bi-sort-down-alt text-light"></i></a>
</button>
  <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
    <a href="{{route('tasks_by_title')}}"><i class="bi bi-type-bold text-light"></i></a>
</button>
  <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
    <a href="{{route('search_by_state')}}"><i class="bi bi-list-columns-reverse text-light"></i></a>
</button>
</div>