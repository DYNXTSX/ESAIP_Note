<?php

class MatiereGateway
{
    private $con;

    public function __construct(Connection $con)
    {
        $this->con = $con;
    }

    public function getAllMatieresDispo(){
        $contacts = $this->con->simpleQueryRetourTableau("SELECT * FROM matieres WHERE code != 0 ORDER BY id ASC");
        return $contacts;
    }
}