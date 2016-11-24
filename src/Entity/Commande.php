<?php
declare(strict_types = 1);

namespace src\Entity;

class Commande
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $datecde;

    /**
     * @var Client
     */
    private $leClient;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getDatecde(): \DateTime
    {
        return $this->datecde;
    }

    /**
     * @param \DateTime $datecde
     */
    public function setDatecde(\DateTime $datecde)
    {
        $this->datecde = $datecde;
    }

    /**
     * @return Client
     */
    public function getLeClient(): Client
    {
        return $this->leClient;
    }

    /**
     * @param Client $leClient
     */
    public function setLeClient(Client $leClient)
    {
        $this->leClient = $leClient;
    }
}