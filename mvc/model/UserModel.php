<?php

    class UserModel {
        public $db;

        public function __construct() {
            $this->db = new PDO("mysql:host=localhost;dbname=testdb;", "root", "");
        }

        public function listUsers() {
            $q = $this->db->query("select * from users");

            return $q->fetchAll(PDO::FETCH_ASSOC);
        }
    }