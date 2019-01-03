<?php

require('includes/dbc.inc.php');
require('includes/todo.inc.php');

$toDo = new ToDo();

$toDo->addTodo();
$toDo->deleteTodo();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>To Do List</title>
  </head>


  <body>
    <h1>To Do List</h1>
      
    <table class="table table-dark">
      <thead>
        <tr>
          <th>ID</th>
          <th>Description</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <form method="post">
            <?php
                $toDo->showAllTodos();
            ?>
      </form>
      </tbody>
    </table>

    <div class="w-50">
        <h1 class="mt-5">Add New To Do</h1>

        <form method="post" action="index.php">
            <div class="input-group mb-3">
                <input type="text" name="newtodo" class="form-control" placeholder="Enter new To Do here">
                <div class="input-group-append">
                    <button name="add_todo" style=float:right type="submit" class="btn btn-success">ADD NEW TO DO</button>
                </div>
            </div>
        </form>

    </div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>