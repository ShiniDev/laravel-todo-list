<form action="/create" method="post" class="form-todo">
  @csrf
  <div class="input-container">
    <label for="name">Task Name <span>*</span> </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="input-container">
    <label for="notes">Additional Notes</label>
    <textarea name="notes" id="notes" cols="20" rows="2"></textarea>
  </div>
  <div class="input-container input-button">
    <input type="submit" value="Add Task">
  </div>
</form>