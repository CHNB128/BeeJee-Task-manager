<style>
.dataTables_wrapper {
  width: 100%;
}
</style>
<div class="d-flex align-items-center mt-3">
  <table id="task-list" class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Is done?</th>
        <th scope="col">Content</th>
        <?php if (isset($_SESSION['is admin'])) { ?>
        <th scope="col">Edit</th>
        <?php } ?>
      </tr>
    </thead>
    <tbody class="card-body">
      <?php foreach ($tasks as $task) { ?>
      <tr>
        <th scope="row"><?php echo $task->id;  ?></th>
        <td><?php echo $task->username; ?></td>
        <td><?php echo $task->email; ?></td>
        <td><?php echo $task->done ? 'Done' : '' ?></td>
        <td><?php echo $task->content; ?></td>
        <?php
          if (isset($_SESSION['is admin'])) {
            echo "<td><a href='/?page=edit-task&task-id={$task->id}'>Edit</a></td>";
          }
        ?>
      </tr>
      <?php } ?>
    </tbody>
  </table>
 </div>
<script>
  $(document).ready(function() {
    $('#task-list').dataTable({ lengthMenu: [ 3 ] });
  });
</script>