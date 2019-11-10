<?php
include('./DbObjects.php');
include('./DBs.php');
include('./Connection.php');

// $newsDb = new NewsDB();
// $announceDb = new AnnounceDB();
// $announceDb->create("asdasd", "dsfsdf", "dfsdf");
// $newsDb->create("sadad", "dsasda", "sasdadasd");

function getAll() {
  $newsDb = new NewsDB();
  $announceDb = new AnnounceDB();
  foreach(array_merge($newsDb->all(), $announceDb->all()) as $publication) {
    print($publication->getContent() . " " . $publication->getSource() . "\n");
  } 
}

getAll();