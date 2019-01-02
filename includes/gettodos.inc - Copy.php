<?php

class GetTodos extends Dbc
{

    protected function getAllTodos()
    {
        //bilo bolje koristiti prepared statement
        $sql = "SELECT * FROM todo";
        $result = $this->connect()->query($sql);

        
        $numRows = $result->num_rows; //nije bilo potrebe stvoriti ovu novu varijablu
        if ($numRows > 0) {
            //echo 'ggg'; - nepotrebni komentar
            while ($row = $result->fetch_assoc()){
               $data[] = $row;
            }
            return $data;
        }

        //ako nema podataka funkcija vraća null
    }

}
