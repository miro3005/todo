<?php

//Praksa je da se ime datoteke nazove isto kao i ime klase
// Strukturalno se ovo sve trebalo drugačije napraviti - nije bilo potrebno ovako razdvajati po crud-u
/**
 * Fali php doc.
 */
class ShowTodos extends GetTodos
{ //PSR novi red
    /**
     * php doc.
     */
    public function showAllTodos()
    { //PSR novi red
        $datas = $this->getAllTodos();

        if (is_array($datas)) {
        //Indenting
        foreach ($datas as $data) {
            //direktni echo u samim klasama je loša praksa jer je teško pratiti program flow,
            //bolji način za napraviti ovo bi bilo da su se tu samo pripremili podaci i onda se
            //koriste tamo di su potrebni na način na koji su potrebni
            //mješanje html-a i php
            echo "<tr>";
            echo '<td>'.$data['id'].'</td>';
            echo '<td>'.$data['description'].'</td>';
            echo '<td><button name="delete_todo" value="'.$data['id'].'" type="submit" class="btn btn-danger">Delete</button></td>';
            echo "</tr>";
        }

        //nije uzet u obzir slučaj kad nema podataka
        }

    }

}
