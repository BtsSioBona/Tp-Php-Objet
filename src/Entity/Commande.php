<?php
declare(strict_types = 1);

namespace src\Entity;

class Commande
{
    private $id;
    private $datecde;
    private $leClient;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDatecde()
    {
        return $this->datecde;
    }

    /**
     * @param mixed $datecde
     */
    public function setDatecde($datecde)
    {
        $this->datecde = $datecde;
    }

    /**
     * @return mixed
     */
    public function getLeClient()
    {
        return $this->leClient;
    }

    /**
     * @param mixed $leClient
     */
    public function setLeClient($leClient)
    {
        $this->leClient = $leClient;
    }
}