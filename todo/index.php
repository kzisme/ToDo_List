<!DOCTYPE html>
<html>
  <head>
    <title>Simple To-Do List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style type="text/css">.container{padding-top:30px;}</style>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="span6">

          <?php require_once 'input.php'; ?>

            <form class="form-horizontal" method="POST">
              <legend>Submit a to-do</legend>
              <div class="control-group">
                <label class="control-label" for="date">Date</label>
                <div class="controls">
                  <input type="date" id="date" name="date" placeholder="Date">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="task">Task</label>
                <div class="controls">
                  <input type="text" id="task" name="task" placeholder="Task">
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Add task</button>
              </div>
            </form>

          </div>

          <div class="span6">
              <legend>List of to-dos</legend>

          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Task</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $sql = "SELECT * FROM  `to_dos`";

              $result = mysql_query($sql);

while ($row = mysql_fetch_assoc($result)) {

              echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['task']}</td>
                <td>{$row['date']}</td>
              </tr>";
}

            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>