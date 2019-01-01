<?php

class Dbc {
    
    private $servername;
    private $username;
    private $password;
    private $databaseName;
    
    protected function connect(){
        $this->servername   = "localhost";
        $this->username     = "root";
        $this->password     = "";
        $this->databaseName = "foreo";

        $connectiontemp = new mysqli($this->servername, $this->username, $this->password);

        // CREATE DATABASE IF NOT EXISTS
        $sql = "CREATE DATABASE IF NOT EXISTS foreo";
        $connectiontemp->query($sql);

        $connection = new mysqli($this->servername, $this->username, $this->password, $this->databaseName);

        return $connection;
    }
        
}

?>