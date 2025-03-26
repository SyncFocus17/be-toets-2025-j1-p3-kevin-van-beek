<?php

class VulkaanModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getVulkanenBySpecificLanden()
{
    $sql = "SELECT 
                Id,
                Naam,
                Hoogte,
                Land,
                JaarLaatsteUitbarsting,
                AantalSlachtoffers,
                IsActief,
                Opmerking
            FROM Vulkaan 
            WHERE IsActief = 1 
            ORDER BY CASE Land 
                WHEN 'Italië' THEN 1
                WHEN 'Democratische Republiek Congo' THEN 2
                WHEN 'Indonesië' THEN 3
                WHEN 'Japan' THEN 4
                WHEN 'IJsland' THEN 5
                ELSE 6
            END";
    
    return $this->db->query($sql)->resultSet();
}

    public function getVulkanen()
    {
        $sql = "SELECT 
                    Id,
                    Naam,
                    Hoogte,
                    Land,
                    JaarLaatsteUitbarsting,
                    AantalSlachtoffers,
                    IsActief,
                    Opmerking,
                    DatumAangemaakt,
                    DatumGewijzigd
                FROM Vulkaan 
                WHERE IsActief = 1 
                ORDER BY AantalSlachtoffers ASC";
        
        return $this->db->query($sql)->resultSet();
    }
}