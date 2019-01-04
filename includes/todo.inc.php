<?php

class ToDo extends Dbc {

    protected function getAllTodos(){

        // CREATE TABLE IF NOT EXISTS
        $sql = "CREATE TABLE IF NOT EXISTS todo (
        id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
        description varchar(300) NOT NULL
        )";
        $this->connect()->query($sql);

        $sql = "SELECT * FROM todo";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

    public function showAllTodos(){
        return $this->getAllTodos();
    }

    public function deleteTodo(){

            // GET USER SELECTION
            $deletetodo = mysqli_real_escape_string($this->connect(), $_POST['delete_todo']);

            // DELETE FROM DB
            $sql = "DELETE FROM todo WHERE id = $deletetodo";
            $this->connect()->query($sql);

    }

    public function addTodo(){

            // GET USER INPUT
            $newtodo = mysqli_real_escape_string($this->connect(), $_POST['newtodo']);

            // INSERT INTO DB
            $sql = "INSERT INTO todo (description) VALUES ('$newtodo')";
            $this->connect()->query($sql);

    }

}


?>