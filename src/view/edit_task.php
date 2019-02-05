<div class="d-flex align-items-center">
  <div class="card w-100 mt-2">
    <div class="card-header">
      <h5 class="mb-0">Edit Task</h5>
    </div>
    <form class="card-body mb-0" action="/">
      <input hidden name="page" value="update-task">
      <input hidden name="id" value="<?php echo $task->id; ?>">

      <div class="form-group">
        <label for="username">User name</label>
        <input name="username" type="login" value="<?php echo $task->username ?>" disabled class="form-control">
      </div>

      <div class="form-group">
        <label for="email">Email address</label>
        <input name="email" type="email" value="<?php echo $task->email ?>" disabled class="form-control">
      </div>

      <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" rows="3"><?php echo $task->content ?></textarea>
      </div>

      <div class="form-group form-check">
        <input type="checkbox" name="done[]" <?php echo $task->done ? 'checked' : '' ?> class="form-check-input">
        <label for="done">Is Done?</label>
      </div>

      <button class="btn btn-primary" type="submit">Save</button>
    </form>
  </div>
</div>