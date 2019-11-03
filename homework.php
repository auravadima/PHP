<?php
  $username = "newuser";
  $password = "password";
  $conn = new PDO("mysql:host=localhost;dbname=my_db;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Задание 1
  createRandomUsers($conn);
  // Задание 2
  print_r(getOlderUsers($conn));
  // Задание 3
  print_r(getJsonByPattern($conn));
  // Задание 4
  print_r(getUpdatedUsers($conn));
  // Задание 5
  print_r(getUniqueNames($conn));
  

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
    $stmt = $conn->prepare("select * from users where name like '%ав%' or age like '%аб%'");
    $stmt->execute();
    return json_encode($stmt->fetchAll(), JSON_UNESCAPED_UNICODE);
  }

  function getUpdatedUsers($conn) {
    $conn->beginTransaction();
    $select = $conn->prepare("select * from users where age > 70 for update;");
    $select->execute();

    $update = $conn->prepare("update users SET name = 'Pepito' WHERE age > 70;");
    $update->execute();

    $conn->commit();
    return $select->fetchAll();
  }

  function getUniqueNames($conn) {
    $select = $conn->prepare("select distinct name from users");
    $select->execute();
    return $select->fetchAll();
  }

  function generateRandomUser($length = 10) {
    $chars = "йцукенгшщзхъфывапролджэячсмитьбюЙЦУКЕНГШЩЗХЪФЫВАПРОЛДЖЭЯЧСМИТЬБЮ";
    $len = 64;
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= iconv_substr($chars, rand(0, $len-1), 1, "utf-8");
    }
    return [ucwords($randomString), rand(10, 100)];
  }
    
?>