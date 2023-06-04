<form action="{{route('tasks.store')}}" method="post" class="add-task">
  @csrf
  <div class="add-task-name">
    <label for="name">Task Name</label>
    <input type="text" name="name" id="name" placeholder="Enter Task Name">
  </div>
  <input type="hidden" name="status" value="hidden">
  <input type="submit" value="Add Task">
</form>