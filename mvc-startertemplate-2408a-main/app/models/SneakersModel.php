<?php

class SneakersModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllSneakers()
    {
        $sql = 'SELECT  SNKS.Id 
                       ,SNKS.Merk
                       ,SNKS.Model
                       ,SNKS.Prijs
                       ,SNKS.Type

                FROM Sneakers as SNKS
                
                ORDER BY SNKS.Merk DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function delete($Id)
    {
        // De delete query
        $sql = "DELETE 
                FROM Sneakers 
                WHERE Id = :Id";
        
        // De query uitvoeren
        $this->db->query($sql);

        // De parameter binden
        $this->db->bind(':Id', $Id, PDO::PARAM_INT);

        // De query uitvoeren
        return $this->db->execute();
    }
    public function create($data)
{
    $sql = "INSERT INTO sneakers (Merk, Model, Prijs, Type)
        VALUES (:merk, :model, :prijs, :type)";


    $this->db->query($sql);
    $this->db->bind(':merk', $data['Merk'], PDO::PARAM_STR);
    $this->db->bind(':model', $data['Model'], PDO::PARAM_STR);
    $this->db->bind(':prijs', $data['Prijs'], PDO::PARAM_STR);
    $this->db->bind(':type', $data['Type'], PDO::PARAM_STR);
    

    // De query uitvoeren
    return $this->db->execute();
}

}