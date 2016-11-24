<?php

declare(strict_types = 1);

namespace src\Entity;

class Client
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $adresserue1;

    /**
     * @var string
     */
    private $adresserue2;

    /**
     * @var string
     */
    private $cp;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var Commande
     */
    private $lesCommandes;

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
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getAdresserue1(): string
    {
        return $this->adresserue1;
    }

    /**
     * @param string $adresserue1
     */
    public function setAdresserue1(string $adresserue1)
    {
        $this->adresserue1 = $adresserue1;
    }

    /**
     * @return string
     */
    public function getAdresserue2(): string
    {
        return $this->adresserue2;
    }

    /**
     * @param string $adresserue2
     */
    public function setAdresserue2(string $adresserue2)
    {
        $this->adresserue2 = $adresserue2;
    }

    /**
     * @return string
     */
    public function getCp(): string
    {
        return $this->cp;
    }

    /**
     * @param string $cp
     */
    public function setCp(string $cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getTel(): string
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel(string $tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return Commande
     */
    public function getLesCommandes(): Commande
    {
        return $this->lesCommandes;
    }

    /**
     * @param Commande $lesCommandes
     */
    public function setLesCommandes(Commande $lesCommandes)
    {
        $this->lesCommandes = $lesCommandes;
    }

}