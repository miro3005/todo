<?php

class DeleteTodo extends Dbc {

    public function deleteTodo(){

        if (isset($_POST['delete_todo'])) {

            // GET SELECTED TODO
            $deletetodo = mysqli_real_escape_string($this->connect(), $_POST['delete_todo']);

            // DELETE FROM DB
            $sql = "DELETE FROM todo WHERE id = $deletetodo";
            $this->connect()->query($sql);
        }


    }

}

?>