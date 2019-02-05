<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand mr-auto" href="/">Task manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a href="/?page=new-task" class="mr-3">
    <button class="btn btn-outline-primary my-2 my-sm-0">Add Task</button>
  </a>
  <?php if (isset($_SESSION['is admin'])) { ?>
  <a href="/?page=logout">
    <button class="btn btn-outline-success my-2 my-sm-0">Logout</button>
  </a>
  <?php } else { ?>
  <a href="/?page=login">
    <button class="btn btn-outline-success my-2 my-sm-0">Login</button>
  </a>
  <?php } ?>
</nav>