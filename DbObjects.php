<?php 

abstract class Publication {
    private $title;
    private $text;
    private $source;

    public function __construct($json) {
        $this->title = $json['title'];
        $this->text = $json['text'];
        $this->source = $json['source'];
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
      return $this;
  }
}

class Announce extends Publication {
  public function getAll() {
      return $this;
  }
}