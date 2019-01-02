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
            //echo 'ggg';
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

    public function showAllTodos(){
        $datas = $this->getAllTodos();

        if (is_array($datas)) {
            foreach ($datas as $data) {
                echo "<tr>";
                echo '<td>'.$data['id'].'</td>';
                echo '<td>'.$data['description'].'</td>';
                echo '<td><button name="delete_todo" value="'.$data['id'].'" type="submit" class="btn btn-danger">Delete</button></td>';
                echo "</tr>";
            }
        }

    }

    public function deleteTodo(){

        if (isset($_POST['delete_todo'])) {

            // GET USER SELECTION
            $deletetodo = mysqli_real_escape_string($this->connect(), $_POST['delete_todo']);

            // DELETE FROM DB
            $sql = "DELETE FROM todo WHERE id = $deletetodo";
            $this->connect()->query($sql);
        }


    }

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

//$addTodo->addTodo();


?>