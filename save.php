<?php

  $file_name = "data.txt";

  $entries_from_file = file_get_contents($file_name);

  //massiiv olemasolevate purkideaga
  $entries = json_decode($entries_from_file);

  if(isset($_GET["id"]) && isset($_GET["title"]) && isset($_GET["ingredients"]) && !empty($_GET["id"]) && !empty($_GET["title"]) && !empty($_GET["ingredients"])){


  $object = new stdClass();
  $object -> id = $_GET["id"];
  $object -> title = $_GET["title"];
  $object -> ingredients = $_GET["ingredients"];

  array_push();

  $json = json_encode($entries);

  //salvestan
  file_put_contents($file_name, $json);



  }




  //var_dump($entries, $object);
  echo(json_encode($entries));




?>
