<?php

class GetTodos extends Dbc {

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

}

?>