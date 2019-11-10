<?php

class NewsDB {
  function all() {
    $sql = "select title, text, link as source from news;";
    $conn = new MysqlConnection();
    $jsonArray = $conn->select($sql);
    $objects = [];
    foreach($jsonArray as $json) {
      array_push($objects, new News($json));
    }
    return $objects;
  }

  function create($title, $text, $source) {
    $sql = sprintf("insert into news (title, text, link) values (\"%s\", \"%s\", \"%s\");", $title, $text, $source);
    $conn = new MysqlConnection();
    $conn->create($sql);
  }
}

class AnnounceDB {
  function all() {
    $sql = "select title, text, author as source from announces;";
    $conn = new MysqlConnection();
    $jsonArray = $conn->select($sql);
    $objects = [];
    foreach($jsonArray as $json) {
      array_push($objects, new Announce($json));
    }
    return $objects;
  }

  function create($title, $text, $source) {
    $sql = sprintf("insert into announces (title, text, author) values (\"%s\", \"%s\", \"%s\");", $title, $text, $source);
    $conn = new MysqlConnection();
    $conn->create($sql);
  }
}