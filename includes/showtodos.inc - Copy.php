<?php
//zašto u finalnoj veziji imati - Copy file-ove, poanta git-a je da prati sve izmjene
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