<table>
  <thead>
    <th>Date Added</th>
    <th>Task Name</th>
    <th>Task Status</th>
    <th>Actions</th>
  </thead>
  <tbody>
    @foreach ($tasks as $task)
      @continue($task->status === 'deleted')
      <tr>
        <form action="{{route('tasks.update', $task->id)}}" method="POST">
          @csrf
          @method('PUT')
          <input type="hidden" name="id" value="{{$task->id}}">
          <td>{{$task->created_at}}</td>
          <td>
            @if($task->status === 'waiting' || $task->status === 'on-going')
              <input type="text" name="name" id="name" value="{{$task->name}}"> 
            @else
              <input type="text" name="name" id="name" value="{{$task->name}}" disabled> 
            @endif
          </td>
          <td class="task-status">{{$task->status}}</td>
          <td>
            @if ($task->status === 'waiting')
              <input type="submit" name="start" value="Start Task">
            @elseif ($task->status === 'on-going')
              <input type="submit" name="finish" value="Finish Task">
            @endif
            <input type="submit" name="delete" value="Delete Task">
          </td>
        </form>
      </tr> 
    @endforeach
  </tbody>
</table>