<?php
  $username = "newuser";
  $password = "password";
  $conn = new PDO("mysql:host=localhost;dbname=my_db;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // createRandomUsers($conn);
  // print_r(getOlderUsers($conn));
  // print_r(getJsonByPattern($conn));
  print_r(getUpdatedUsers($conn));

  function createRandomUsers($conn) {
    $stmt = $conn->prepare("insert into users (name, age) values (:name, :age)");
    for($i = 0; $i < 1000; $i++) {
      $user = generateRandomUser();
      $stmt->bindValue(':name', $user[0]);
      $stmt->bindValue(':age', $user[1]);
      $stmt->execute();
    }
  }

  function getOlderUsers($conn) {
    $stmt = $conn->prepare("select * from users where age > 50");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getJsonByPattern($conn) {
    $stmt = $conn->prepare("select * from users where name like '%av%' or age like '%ab%'");
    $stmt->execute();
    return json_encode($stmt->fetchAll());
  }

  function getUpdatedUsers($conn) {
    $stmt = $conn->prepare(
      "start transaction; 
       select * from users where age > 70 for update; 
       update users SET name = 'Pepito' WHERE age > 70;
       commit;"
    );
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function generateRandomUser($length = 10) {
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= chr(rand(97, 122));
    }
    return [ucwords($randomString), rand(10, 100)];
  }
    
?>