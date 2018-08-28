<?php
    namespace App\Core;

    use \PDO;

    class DbConnection {
        private $configuration;
        private $connection;

        public function __construct(DbConfiguration $dbConfiguration) {
            $this->configuration = $dbConfiguration;
        }

        public function getConnection(): PDO {

            if($this->connection === NULL){
                $this->connection = new PDO($this->configuration->getSourceString(),
                                            $this->configuration->getUser(),
                                            $this->configuration->getPass());
                
            }
            return $this->connection;
        }
    }