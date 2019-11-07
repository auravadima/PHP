<?php

abstract class Publication {
    private $title;
    private $text;
    private $source;

    public function __construct($json) {
        $this->title = $json->title;
        $this->text = $json->text;
        $this->source = $json->source;
    }

    public function getSource() {
        return $this->source;
    }

    public function getContent() {
        return $this->text;
    }

    public abstract function getAll();
}

class News extends Publication {

    public function getAll() {
        return $this->title;
    }
}

class Announce extends Publication {

    public function getAll() {
        return $this->title;
    }
}

abstract class MysqlConnection {
    private $conn;

    function __construct() {
        $this->conn = new PDO("mysql:host=localhost;dbname=my_db", "newuser", "password");
    }

    function select($columns, $table) {
        $stmt = $conn->prepare("select $columns from $table");
        return $stmt->execute(); 
    }

    function insert($columns, $table) {
        $stmt = $conn->prepare("insert $columns from $table");
        return $stmt->execute(); 
    }
}

class NewsDB extends DB {
    function all() {
        $stmt = $conn->prepare("select title, text, link as source from news");
        return $stmt->execute();
    }
}

class AnnounceDB extends DB {
    function all() {
        $stmt = $conn->prepare("select title, text, author as source from announces");
        return $stmt->execute();
    }
}

class MysqlConnection