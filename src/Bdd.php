<?php
declare(strict_types = 1);

namespace src;


class Bdd
{

    private $_dbmysql;

    public function __construct()
    {
        try {
            $connect_str = "mysql:host=" . Config::read("db.host") . ";dbname=" . Config::read("db.basename");
            $connect_user = Config::read("db.user");
            $connect_pass = Config::read("db.password");
            $options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;
            $this->_dbmysql = new \PDO($connect_str, $connect_user, $connect_pass, $options);

        } catch (\Exception $e) {
            throw new \RuntimeException("Erreur à la connexion  \n" . $e->getMessage());
        }
    }

    public function getConnexion() {
        return $this->_dbmysql;
    }

}