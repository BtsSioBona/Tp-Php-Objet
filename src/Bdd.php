<?php
declare(strict_types = 1);

namespace src;


class Bdd
{

    private $_dbmysql;

    public function __construct()
    {
        try {
            $connect_str = "mysql:host=localhost;dbname=tppdo";
            $connect_user = "tp";
            $connect_pass = "trp";
            $options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;
            $this->_dbmysql = new \PDO($connect_str, $connect_user, $connect_pass, $options);

        } catch (\Exception $e) {
            throw new \RuntimeException("Erreur à la connexion  \n" . $e->getMessage());
        }
    }

}