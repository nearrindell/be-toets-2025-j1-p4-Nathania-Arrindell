<?php

class TorensModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllTorens()
    {
        $sql = 'SELECT  TRNS.Naam
                       ,TRNS.Locatie
                       ,TRNS.Hoogte
                       ,TRNS.Aantalverdiepingen
                       ,TRNS.Jaarvoltooid

                FROM Torens as TRNS
                
                ORDER BY TRNS.Naam DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}