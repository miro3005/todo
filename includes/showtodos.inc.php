<?php

class ShowTodos extends GetTodos {

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

}

?>