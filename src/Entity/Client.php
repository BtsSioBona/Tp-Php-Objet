<?php

declare(strict_types = 1);

namespace src\Entity;

class Client
{
    private $id;
    private $titre;
    private $nom;
    private $prenom;
    private $adresserue1;
    private $adresserue2;
    private $cp;
    private $ville;
    private $tel;
    private $lesCommandes;

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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresserue1()
    {
        return $this->adresserue1;
    }

    /**
     * @param mixed $adresserue1
     */
    public function setAdresserue1($adresserue1)
    {
        $this->adresserue1 = $adresserue1;
    }

    /**
     * @return mixed
     */
    public function getAdresserue2()
    {
        return $this->adresserue2;
    }

    /**
     * @param mixed $adresserue2
     */
    public function setAdresserue2($adresserue2)
    {
        $this->adresserue2 = $adresserue2;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getLesCommandes()
    {
        return $this->lesCommandes;
    }

    /**
     * @param mixed $lesCommandes
     */
    public function setLesCommandes($lesCommandes)
    {
        $this->lesCommandes = $lesCommandes;
    }
}