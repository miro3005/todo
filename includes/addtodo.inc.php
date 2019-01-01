<?php

class AddTodo extends Dbc {

    public function addTodo(){

        if (isset($_POST['add_todo'])) {

            // GET USER INPUT
            $newtodo = mysqli_real_escape_string($this->connect(), $_POST['newtodo']);

            // INSERT INTO DB
            $sql = "INSERT INTO todo (description) VALUES ('$newtodo')";
            $this->connect()->query($sql);
        }


    }

}

?>