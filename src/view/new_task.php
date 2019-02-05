<div class="d-flex align-items-center">
  <div class="card w-100 mt-2">
    <div class="card-header">
      <h5 class="mb-0">New Task</h5>
    </div>
    <form class="card-body mb-0" action="/">
      <input hidden name="page" value="add-task">

      <div class="form-group">
        <label for="username">User name</label>
        <input name="username" type="login" class="form-control" placeholder="User name">
      </div>

      <div class="form-group">
        <label for="email">Email address</label>
        <input name="email" type="email" class="form-control" placeholder="name@example.com">
      </div>

      <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" rows="3" placeholder="Buy milk"></textarea>
      </div>

      <button class="btn btn-primary" type="submit">Add task</button>
    </form>
  </div>
</div>