<?php

/**
 * Class Data breach controller - dbc?
 */
class Dbc {

    //ne korištenje standarda za pisanje koda
    private $servername;
    private $username;
    private $password;
    private $databaseName;
    
    protected function connect()
    {
        $this->servername   = "localhost";
        $this->username     = "root";
        $this->password     = "";
        $this->databaseName = "foreo";

        $connectiontemp = new mysqli($this->servername, $this->username, $this->password);

        //no error handling

        // CREATE DATABASE IF NOT EXISTS
        // ovo se treba okinuti kod inicijalnog postavljanja sustav i više ne provjeravati
        // ovo je u svakom slučaju nepotrebno opterećenje sustava
        $sql = "CREATE DATABASE IF NOT EXISTS foreo";
        $connectiontemp->query($sql);

        //nepotrebno stvaranje više konekcija na bazu
        $connection = new mysqli($this->servername, $this->username, $this->password, $this->databaseName);

        return $connection;
    }
        
}

//ovo se ne treba stavaljat na kraj ?>