<?php

    namespace atv\traits;

    use atv\database\Connection as Connect;

    trait Connection {

        protected $connection;

        public function __construct() {
            $this->connection = Connect::connection();
        }
    }