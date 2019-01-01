<?php

class ShowTodos extends GetTodos {

    public function showAllTodos(){
        $datas = $this->getAllTodos();
        foreach ($datas as $data) {
            //echo $data['id'];

            echo '<td>'.$data['id'].'<td>';
            echo '<td>'.$data['description'].'<td>';
            echo '<td>'."DELETE".'<td>';

        }
    }

}

?>