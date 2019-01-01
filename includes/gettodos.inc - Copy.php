<?php

class GetTodos extends Dbc {

    protected function getAllTodos(){
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